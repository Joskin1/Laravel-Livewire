<div>
    <div class="p-5 mx-auto max-w-md">
        <h2 class="text-2xl mb-3">Users List</h2>
        <input wire:model.live.debounce.3s="search" type="text" placeholder="search....."
            class="ring-1 rign-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded w-full p-2.5 mx-auto">
        <button wire:click="update" type="button" class="block mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded">Search</button>
        <div role="status" class="my-3 p-4 border border-gray-200 divide-y divide-gray-200 rounded shadow dark:divide-gray-700 md:p-6">
            @foreach ($users as $user)
                <div wire:key="{{ $user->id }}" class="flex items-center justify-between py-3">
                    <div class="">
                        <div class="text-gray-900 rounded-full dark:bg-gray-600 w-24 mb-2 truncate">{{ $user->name }} </div>
                        <div class="text-xs text-gray-600 w-32 rounded-full dark:bg-gray-700">{{ $user->email }} </div>
                    </div>
                    <button class="text-white bg-teal-500 px-3 py-1 rounded-full">View</button>
                </div>
            @endforeach

        </div>


    </div>
      <div class="my-2">
            {{ $users->links() }}

</div>
