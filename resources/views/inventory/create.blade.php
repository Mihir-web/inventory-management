@extends('layouts. app ')
@section('content ')
<h1>Add New Inventory Item</hl>
    <form action="{{route('inventory. store')}}" method="POST">
        @csrf
        <label>Product Name: </label>
        <input type="text" name="product name" required>

        <label>Category: </label>
        <input type="text" name="category" required>

        <label>Quantity: </label>
        <input type="number" name="quantity" required>

        <label>Price:</label>
        <input type="text" name="price" required>
                            
                            
        <button type="submit">Add Item</button>
    </form>
    @endsection