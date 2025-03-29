@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Price:</label>
        <input type="number" name="price" step="0.01" required>
        <button type="submit">Create</button>
    </form>
@endsection
