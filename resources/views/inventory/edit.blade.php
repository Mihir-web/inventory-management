@extends(' layouts. app ')
@section(' content ')
<h1>Edit Inventory Item</hl>
    <form action="{{ route( 'inventory.update', $inventory->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label>Product Name: </label>
        <input type="text" name="product_name" value="{{ $inventory->product_name }}" required>
        
        <label>Category: </label>
        <input type="text" name="category" value="{{ $inventory->category }}" required>

        <label>Quantity: </label>
        <input type="number" name="quantity" value="{{ $inventory->quantity }}" required>

        <label>Price: </label>
        <input type="text" name="price" value="{{ $inventory->price }}" required>
        
    </form>
@endsection