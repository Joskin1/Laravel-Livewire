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
    public function delete($todoID)
    {
        $todo = Todo::find( $todoID );
        $todo->delete();
    }
    public function toggle($todoID)
    {
        $todo = Todo::find( $todoID );
        $todo->completed = !$todo->completed;
        $todo->save();
    }
    public function render()
    {

        return view('livewire.todo-list', [
            'todos' => Todo::latest()->where('name', 'like', "%{$this->search}%")->paginate(3),
        ]);
    }
}
