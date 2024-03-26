<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    <form wire:submit.prevent="createNewUser" enctype="multipart/form-data">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input id="name" class="block rounded border border-gray-300 py-2 px-3 w-full focus:outline-none focus:border-indigo-500" wire:model="name" type="text" placeholder="Enter your name">
            @error('name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email Address</label>
            <input id="email" class="block rounded border border-gray-300 py-2 px-3 w-full focus:outline-none focus:border-indigo-500" wire:model="email" type="email" placeholder="Enter your email">
            @error('email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
            <input id="password" class="block rounded border border-gray-300 py-2 px-3 w-full focus:outline-none focus:border-indigo-500" wire:model="password" type="password" placeholder="Enter your password">
            @error('password')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="file" class="block text-gray-700 font-bold mb-2">Profile Picture</label>
            <input id="file" accept="image/png, image/jpeg" class="block rounded border border-gray-300 py-2 px-3 w-full focus:outline-none focus:border-indigo-500" wire:model="image" type="file">
            @error('image')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div wire:loading wire:target="image">
            <span class="block mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded hover:bg-teal-600">Uploading.......</span>
        </div>
        <div wire:loading.delay>
            <span class="text-green-500">Sending.....</span>
        </div>
        <div wire:loading.class.remove="bg-indigo-500" wire:loading.attr="disable">
            <button class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold mt-4 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Create User</button>
        </div>
    </form>
    <hr class="my-6">
    <div>
        @foreach ($users as $user)
            <div class="mb-4">
                <h3 class="text-lg font-bold">{{ $user->name }}</h3>
            </div>
        @endforeach
        {{ $users->links() }}
    </div>
</div>
