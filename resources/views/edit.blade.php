@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <label>Price:</label>
        <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
