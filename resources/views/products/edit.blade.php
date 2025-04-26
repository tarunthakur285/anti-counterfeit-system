@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Edit Product</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-gray-600 mb-2">Product Name:</label>
                <input type="text" name="name" id="name" value="{{ $product->name }}" required
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label for="description" class="block text-gray-600 mb-2">Description:</label>
                <textarea name="description" id="description" rows="3" required
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">{{ $product->description }}</textarea>
            </div>

            <div>
                <label for="serial_number" class="block text-gray-600 mb-2">Serial Number:</label>
                <input type="text" name="serial_number" id="serial_number" value="{{ $product->serial_number }}" required
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="flex justify-center space-x-4 mt-6">
                <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-full transition duration-300">
                    Update
                </button>
                <a href="{{ route('products.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-6 rounded-full transition duration-300">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
