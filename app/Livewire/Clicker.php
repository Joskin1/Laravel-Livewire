<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $name;
    public $email;
    public $password;
    public $image;

    protected $rules = [
        "name" => "required|min:2|max:50",
        "email" => "required|unique:users",
        "password" => "required|min:3",
        'image' => 'nullable|sometimes|image|max:1024', // Maximum size is 1 MB
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function createNewUser()
    {
        $validated = $this->validate();

        if ($this->image) {
            $validated['image'] = $this->image->store('uploads', 'public');
        }

        User::create($validated);

        $this->reset(['name', 'email', 'password', 'image']);

        session()->flash('success', 'Registration is successful');
    }

    public function render()
    {
        $users = User::paginate(2);

        return view('livewire.clicker', compact('users'));
    }
}
