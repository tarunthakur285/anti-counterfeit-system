@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Product</h2>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div>
            <label>Brand:</label>
            <input type="text" name="brand" value="{{ old('brand', $product->brand) }}" required>
        </div>

        <div>
            <label>Code:</label>
            <input type="text" name="code" value="{{ old('code', $product->code) }}" required>
        </div>

        <div>
            <label>Description:</label>
            <textarea name="description">{{ old('description', $product->description) }}</textarea>
        </div>

        <button type="submit">Update Product</button>
    </form>
</div>
@endsection
