<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public function createNewUser(){
       User::create([
        'name' => 'Live Wire',
        'email' => 'livewire@livewire.com',
        'password'=> bcrypt('password'),
       ]);
    }
    public function render()
    {
        $title = 'title';
        $users = User::all();
        return view('livewire.clicker', [
            'users'=> $users,
            'title'=> $title    
        ]);
    }
}
