<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination;
    public $name;
    public $email;
    public $password;
    public function createNewUser(){
        $this->validate([
            "name"=> "required|min:2|max:50",
            "email"=> "required|unique:users",
            "password"=> "required|min:3"
        ]);
       User::create([
        'name' => $this->name,
        'email' => $this->email,
        'password'=> bcrypt($this->password),
       ]);
       request()->session()->flash('success','Registration is successful');
    }
    public function render()
    {
        $users = User::paginate(2);
        return view('livewire.clicker', [
            'users'=> $users,
        ]);
    }
}
