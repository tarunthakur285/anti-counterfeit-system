@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Add New Product</h2>

        <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-gray-600 mb-2">Product Name:</label>
                <input type="text" name="name" id="name" required
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label for="brand" class="block text-gray-600 mb-2">Brand:</label>
                <input type="text" name="brand" id="brand" required
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label for="code" class="block text-gray-600 mb-2">Unique Code:</label>
                <input type="text" name="code" id="code" required
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label for="description" class="block text-gray-600 mb-2">Description:</label>
                <textarea name="description" id="description" rows="3"
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>

            <div class="flex justify-center">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full transition duration-300">
                    Add Product
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('products.index') }}" class="text-blue-400 hover:text-blue-600">← Back to Home</a>
        </div>
    </div>
</div>
@endsection
