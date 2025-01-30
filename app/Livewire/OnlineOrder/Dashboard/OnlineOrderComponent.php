<?php

namespace App\Livewire\OnlineOrder\Dashboard;

use Livewire\Component;
use App\WebsiteOrder;
use App\Traits\ModesTrait;

class OnlineOrderComponent extends Component
{
    use ModesTrait;

    public $modes = [
        'onlineOrderDisplay' => false,
        'listMode' => true,
        'searchMode' => false,
    ];

    protected $listeners = [
        'displayOnlineOrder',
        'exitOnlineOrderDisplayMode',
    ];

    public $displayingOnlineOrder = null;

    public function render()
    {
        return view('livewire.online-order.dashboard.online-order-component');
    }

    /* Clear modes */
    public function clearModes()
    {
        foreach ($this->modes as $key => $val) {
            $this->modes[$key] = false;
        }
    }

    /* Enter and exit mode */
    public function enterMode($modeName)
    {
        $this->clearModes();

        $this->modes[$modeName] = true;
    }

    public function exitMode($modeName)
    {
        $this->modes[$modeName] = false;
    }

    public function displayOnlineOrder($onlineOrderId)
    {
        $onlineOrder = WebsiteOrder::findOrFail($onlineOrderId);

        $this->displayingOnlineOrder = $onlineOrder;
        $this->enterMode('onlineOrderDisplay');
    }

    public function exitOnlineOrderDisplayMode()
    {
        $this->displayingSaleQuotation = null;
        $this->clearModes();
    }
}
