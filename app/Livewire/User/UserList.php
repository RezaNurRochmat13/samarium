<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\ModesTrait;
use App\User;

class UserList extends Component
{
    use WithPagination;
    use ModesTrait;

    /* Use bootstrap pagination theme */
    protected $paginationTheme = 'bootstrap';

    // public $users;

    public $usersCount;
    public $adminUsersCount;

    public $deletingUser;

    public $modes = [
        'delete' => false,
    ];

    public function render()
    {
        $users = User::orderBy('id', 'DESC')->paginate(5);
        $this->usersCount = User::count();
        $this->adminUsersCount = User::where('role', 'admin')->count();

        return view('livewire.user.user-list')
            ->with('users', $users);
    }

    public function deleteUser(User $user)
    {
        $this->deletingUser = $user;

        $this->enterMode('delete');
    }

    public function deleteUserCancel()
    {
        $this->deletingUser = null;
        $this->exitMode('delete');
    }

    public function confirmDeleteUser()
    {
        // Todo: Add delete functionality later.
        //       For now we cannot delete user!
        $this->exitMode('delete');
    }
}
