@extends('layouts.core')

<div class="bg-white p-8 rounded-lg shadow-md w-96">


    <h1 class="text-2xl font-semibold mb-4">Form Example</h1>
    <form action="{{ route('form_post') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-600 font-medium">Name</label>
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <input type="text" id="name" name="name"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                placeholder="John Doe" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-600 font-medium">Email</label>
            <input type="email" id="email" name="email"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                placeholder="johndoe@example.com" required>
        </div>
        <div class="text-center">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg transition duration-300">Submit</button>
        </div>
    </form>
</div>
