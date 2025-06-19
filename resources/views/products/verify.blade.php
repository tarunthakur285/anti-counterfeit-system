@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        @if($isGenuine)
            <div class="bg-green-100 text-green-700 p-4 mb-6 rounded-lg text-center font-semibold">
                ✅ This product is <strong>Genuine</strong>.
            </div>

            <div class="space-y-4 text-gray-700">
                <h2 class="text-2xl font-bold text-center">{{ $product->name }}</h2>
                <p><strong>Brand:</strong> {{ $product->brand }}</p>
                <p><strong>Description:</strong> {{ $product->description }}</p>
                <p><strong>Product Code:</strong> {{ $product->code }}</p>
            </div>
        @else
            <div class="bg-red-100 text-red-700 p-4 mb-6 rounded-lg text-center font-semibold">
                ❌ This product is <strong>Counterfeit</strong>. No valid key found in the database.
            </div>
        @endif

        <div class="mt-6 text-center">
            <a href="{{ route('products.index') }}" class="text-blue-500 hover:text-blue-700 font-medium">← Back to Home</a>
        </div>
    </div>
</div>
@endsection
