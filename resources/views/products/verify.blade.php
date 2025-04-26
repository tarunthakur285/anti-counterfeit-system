
    @extends('layouts.app')
    @section('content')
    @if($isGenuine)
    <div class="alert alert-success">This product is <strong>Genuine</strong>.</div>
    <div class="card">
        <div class="card-body">
            <h5>{{ $product->name }}</h5>
            <p><strong>Brand:</strong> {{ $product->brand }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Product Code:</strong> {{ $product->code }}</p>
        </div>
    </div>
    @else
    <div class="alert alert-danger">This product is <strong>Counterfeit</strong>. No valid key found in the database.</div>
    @endif
    @endsection
    