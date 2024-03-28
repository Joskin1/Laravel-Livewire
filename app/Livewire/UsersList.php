<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;
    public  $search;
    public function update()
    {
    }
    public function render()
    {
        return view('livewire.users-list', [
            'users' => User::latest()
                ->where('name', 'like', "%{$this->search}%")
                ->paginate(10)
        ]);
    }
}
