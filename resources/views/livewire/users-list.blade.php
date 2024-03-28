<div wire:poll class="mt-4 px-4">
    @foreach ($users as $user)
        <div class="mb-4 p-4 bg-white shadow-md rounded-lg">
            <h3 class="text-lg font-bold text-gray-800">{{ $user->name }}</h3>
        </div>
    @endforeach
    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
