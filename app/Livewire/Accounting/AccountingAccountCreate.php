<?php

namespace App\Livewire\Accounting;

use Livewire\Component;
use App\AbAccount;
use App\AbAccountType;

class AccountingAccountCreate extends Component
{
    public $name;
    public $ab_account_type_id;
    public $increase_type;
    public $abAccountTypes;

    public function render()
    {
        $this->abAccountTypes = AbAccountType::all();

        return view('livewire.accounting.accounting-account-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'ab_account_type_id' => 'required|integer',
            'increase_type' => 'required',
        ]);

        AbAccount::create($validatedData);

        $this->dispatch('abAccountAdded');
    }
}
