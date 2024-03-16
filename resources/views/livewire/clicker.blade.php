<div>
    @if (session('success'))
        {{ session('success') }}
    @endif
    <form wire:submit="createNewUser" action="">
        <input class="block rounded border border-gray-100 py-1 mb-1" wire:model="name" type="text" placeholder="name">
        @error('name')
            {{ $message }}
        @enderror
        <input class="block rounded border border-gray-100 py-1 mb-1" wire:model="email" type="email" placeholder="email">
        @error('email')
            {{ $message }}
        @enderror
        <input class="block rounded border border-gray-100 py-1 mb-1" wire:model="password" type="password" placeholder="password">
        @error('password')
            {{ $message }}
        @enderror
        <button class="block rounded px-3 py-1 bg-gray-400 text-white">Create</button>
    </form>
    <hr>
    @foreach ($users as $user)
        <h3>
            {{ $user->name }}
        </h3>
    @endforeach
    {{ $users->links() }}
</div>
