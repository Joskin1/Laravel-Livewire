<div id="content" class="mx-auto" style="max-width:500px;">
    @if (session('error'))
    <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md" role="alert">
        <div class="flex">
            <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.5 3.53l2.48-2.48a1.5 1.5 0 0 1 2.12 0L10 5.69l3.9-3.9a1.5 1.5 0 0 1 2.12 2.12l-4.95 4.95a1.5 1.5 0 0 1-2.12 0L2.5 5.66a1.5 1.5 0 0 1 0-2.13zM7 14.33l-2.48-2.48a1.5 1.5 0 0 1 0-2.12L10 8.31l3.9-3.9a1.5 1.5 0 0 1 2.12 2.12l-4.95 4.95a1.5 1.5 0 0 1-2.12 0L7 14.33z"/></svg></div>
            <div>
                <p class="font-bold">Alert!</p>
                <p class="text-sm">Error.</p>
                <p class="text-sm">{{ session('error') }}</p>

            </div>
        </div>
    </div>


    @endif
    @include('livewire.includes.create-todo-box')
    @include('livewire.includes.search-box')
    <div id="todos-list">
        @foreach ($todos as $todo)
            @include('livewire.includes.todo-cards')
        @endforeach

        <div class="my-2">
            {{ $todos->links() }}
        </div>
    </div>
</div>
