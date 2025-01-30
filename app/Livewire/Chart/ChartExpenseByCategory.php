<?php

namespace App\Livewire\Chart;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Expense;

class ChartExpenseByCategory extends Component
{
    public $expenses = null;

    public $startDate = null;
    public $endDate = null;
    public $total = 0;

    public $expenseByCategory = array();

    /*
    public function mount()
    {
        $this->startDate = date('Y-m-d');
    }
    */

    public function render()
    {
        $this->getExpensesForDateRange();
        $this->getExpenseByCategory();
        $this->calculateTotal();

        return view('livewire.chart.chart-expense-by-category');
    }

    public function getExpensesForDateRange()
    {
        /* Todo: Validation */
        $validatedData = $this->validate([
            'startDate' => 'required|date',
            'endDate' => 'nullable|date',
        ]);

        /*
         * Todo: Validate that endDate is not smaller than startDate
         *
         * Well, below is a simple validation.
         *
         * TOdo: Need to do in livewire / laravel specific way.
         *
         */

        try {
            if ($validatedData['endDate']) {
                if (! $validatedData['startDate']) {
                    return;
                }

                if ($validatedData['startDate'] > $validatedData['endDate']) {
                    return;
                }
            }

            if ($validatedData['endDate']) {
                $expenses = Expense::whereDate('created_at', '>=', $validatedData['startDate'])
                    ->whereDate('created_at', '<=', $validatedData['endDate'])
                    ->orderBy('expense_id', 'desc')
                    ->get();
            } else {
                $expenses = Expense::whereDate('created_at', $validatedData['startDate'])
                    ->orderBy('expense_id', 'desc')
                    ->get();
            }
        } catch(\Throwable $e) {
            Log::error($e);
        }

        $this->expenses = $expenses;
    }

    public function calculateTotal()
    {
        $this->total = 0;

        if (! is_null($this->expenses) && count($this->expenses) > 0) {
            foreach ($this->expenses as $expense) {
                $this->total += $expense->amount;
            }
        }
    }

    public function getExpenseByCategory()
    {
        $this->expenseByCategory = array();

        foreach ($this->expenses as $expense) {
            if (array_key_exists($expense->expenseCategory->name, $this->expenseByCategory)) {
                $this->expenseByCategory[$expense->expenseCategory->name] += $expense->amount;
            } else {
                $this->expenseByCategory[$expense->expenseCategory->name] = $expense->amount;
            }
        }

        arsort($this->expenseByCategory);
    }
}
