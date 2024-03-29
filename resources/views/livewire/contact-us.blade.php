<div>

    <div class="max-w-md mx-auto mt-8 bg-white rounded-lg shadow-md">
        @if(session()->has('success'))
        <div class="bg-green-200 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p class="font-bold">Success!</p>
            <p>{{ session('success') }}</p>
        </div>
    @endif
        <div class="p-6">
            <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
            <form action="#" wire:submit="submitForm">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-1">Your Name</label>
                    <input wire:model="form.name" id="name" name="name" type="text" placeholder="Enter your name"
                        class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-indigo-500"
                        value="{{ old('name') }}" required>
                    @error('form.name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-1">Your Email</label>
                    <input  wire:model="form.email" id="email" name="email" type="email" placeholder="Enter your email"
                        class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-indigo-500"
                        value="{{ old('email') }}" required>
                    @error('form.email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="subject" class="block text-gray-700 font-semibold mb-1">Subject</label>
                    <input  wire:model="form.subject" id="subject" name="subject" type="text" placeholder="Enter the subject"
                        class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-indigo-500"
                        value="{{ old('subject') }}" required>
                    @error('form.subject')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-semibold mb-1">Message</label>
                    <textarea  wire:model="form.message" id="message" name="message" rows="4" placeholder="Enter your message"
                        class="block w-full px-4 py-2 border rounded-md focus:outline-none focus:border-indigo-500" required>{{ old('message') }}</textarea>
                    @error('form.message')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <button wire:click.prevent="submitForm" type="submit"
                    class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </form>
        </div>
    </div>

</div>
