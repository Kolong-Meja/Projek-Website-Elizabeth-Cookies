<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
</head>
<body>
    <h2>Welcome to order page</h2>
    @if (Auth::user())
        <a href="{{ route('product.index')}}">Back To Home</a>
        <p>{{ $product->name }}</p>
        <p>{{ $product->description }}</p>
        <img class="card-img-top" src="{{ asset('image/'.$product->image) }}" alt="Card image" style="width:50%">
        <p>{{ $product->price }}</p>
    @endif
    <label for="quantity">Amount Of Item You Want Buy:</label>
    <input type="number" min="1" max="">
</body>
</html>