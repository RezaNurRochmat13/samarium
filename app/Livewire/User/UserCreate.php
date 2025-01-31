<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;

class UserCreate extends Component
{
    public $name;
    public $email;
    public $role;
    public $password;
    public $password_confirm;

    public function render()
    {
        return view('livewire.user.user-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['last_login_at'] = Carbon::now();

        User::create($validatedData);

        $this->dispatch('userCreated');
    }
}
