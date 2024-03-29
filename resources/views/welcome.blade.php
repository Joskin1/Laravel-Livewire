<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>

    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script> --}}
    @livewireStyles

</head>

<body class="p-5">
    <x-modal name="modal 1" title='Modal 1'>
        <x-slot:body>
            {{-- @livewire('registration-form') --}}
        </x-slot>
    </x-modal>

    <button x-data @click="$dispatch('open-modal',{name : 'modal 1'})"
        class="px-3 py-1 bg-teal-500 text-white rounded">
        Open        Modal 1
    </button>

    <x-modal name="modal 2" title='Modal 2'>
        <x-slot:body>
            @livewire('users-list')
        
        </x-slot>
    </x-modal>

    <button x-data @click="$dispatch('open-modal',{name : 'modal 2'})"
        class="px-3 py-1 bg-teal-500 text-white rounded">Open
        Modal 2
    </button>
    {{-- @livewire('registration-form') --}}

@livewireScripts
</body>

</html>
