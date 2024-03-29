<?php
namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;


class UsersList extends Component
{
    use WithPagination;
    public  $search;
    public $selectedUser;
    public function mount($search = null)
    {
        $this->search = $search;
    }
    public function viewUser(User $user){
        $this->selectedUser = $user;
        $this->dispatch('open-modal', name : 'user-details');
    }
    #[Computed()]
    public function users(){
        return User::latest()
        ->where('name', 'like', "%{$this->search}%")
        ->paginate(10);
    }
    // public function render()
    // {
    //     return view('livewire.users-list', []);
    // }
}
