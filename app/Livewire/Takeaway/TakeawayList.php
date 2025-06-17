<?php

namespace App\Livewire\Takeaway;

use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;
use App\Traits\ModesTrait;
use App\Models\Takeaway\Takeaway;

class TakeawayList extends Component
{
    use WithPagination;
    use ModesTrait;

    // public $takeaways;

    public $deletingTakeaway = null;

    public $todayTakeawayCount;
    public $totalTakeawayCount;
    public $hasVat;
     
    /* Use bootstrap pagination theme */
    protected $paginationTheme = 'bootstrap';

    public $modes = [
        'confirmDelete' => false,
        'showOnlyPendingMode' => false,
        'showOnlyPartiallyPaidMode' => false,
        'showOnlyPaidMode' => false,
        'showAllMode' => true,
        'delete' => false, 
        'cannotDelete' => false, 
    ];

    protected $listeners = [
        'exitConfirmTakeawayDelete',
        'takeawayDeleted' => 'ackTakeawayDeleted',
    ];

    public function render(): View
    {
        $this->hasVat = SaleInvoiceAdditionHeading::where('name', 'vat')->exists();

        if ($this->modes['showAllMode']) {
            $takeaways = Takeaway::orderBy('takeaway_id', 'desc')->paginate(5);
            $this->totalTakeawayCount = Takeaway::count();
        } else if ($this->modes['showOnlyPendingMode']) {

            $takeaways = Takeaway::whereHas('saleInvoice', function ($query) {
                $query->where('payment_status', 'pending');
            })->orderBy('takeaway_id', 'desc');

            $this->totalTakeawayCount = $takeaways->count();
            $takeaways  = $takeaways->paginate(5);

        } else if ($this->modes['showOnlyPartiallyPaidMode']) {
            $takeaways = Takeaway::whereHas('SaleInvoice', function ($query) {
                $query->where('payment_status', 'partially_paid');
            })->orderBy('takeaway_id', 'desc');
            $this->totalTakeawayCount = $takeaways->count();
            $takeaways  = $takeaways->paginate(5);
        } else if ($this->modes['showOnlyPaidMode']) {
            $takeaways = Takeaway::whereHas('SaleInvoice', function ($query) {
                $query->where('payment_status', 'paid');
            })->orderBy('takeaway_id', 'desc');
            $this->totalTakeawayCount = $takeaways->count();
            $takeaways  = $takeaways->paginate(5);
        } else {
            // Todo
        }

        $this->todayTakeawayCount = Takeaway::whereDate('created_at', date('Y-m-d'))->count();

        return view('livewire.sale.takeaway-list')
            ->with('takeaways', $takeaways);
    }

    public function confirmDeleteTakeaway(Takeaway $takeaway): void
    {
        $this->deletingTakeaway = $takeaway;

        $this->enterMode('confirmDelete');
    }

    public function exitConfirmTakeawayDelete(): void
    {
        $this->deletingTakeaway = null;
        $this->exitMode('confirmDelete');
    }

    public function ackTakeawayDeleted(): void
    {
        $this->deletingExpense = null;
        $this->exitMode('confirmDelete');

        $this->render();
    }
}
