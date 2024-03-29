<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
//Annotation
#[Title("Users Page")]
class UsersPage extends Component
{
    public User $user;
    // public function mount(User $user){
    //     $this->user = $user;
    // }
    // public function render()
    // {
    //     return view('livewire.users-page');
    // }
}
