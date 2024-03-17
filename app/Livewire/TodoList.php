<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;
    #[Rule("required")]
    public $name;
    public $search;
    public function create()
    {
        $attributes = $this->validateOnly("name");
        Todo::create($attributes);
        $this->reset("name");
        session()->flash("success", __("submitted"));
    }
    public function render()
    {

        $todos = Todo::query()
        ->where('name', 'like', "%{$this->search}%")
        ->latest()
        ->paginate(3);

    return view('livewire.todo-list', compact('todos'));
    }
}
