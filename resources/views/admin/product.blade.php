<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
</head>
<body>
    <a href={{ url('product/create')}}>Create Product</a>
    @foreach($product as $p)
    <p>{{ $p->id }}</p>
    <p>{{ $p->name }}</p>
    <p>{{ $p->description }}</p>
    <img src="{{ 'image/'}}{{ $p->image }}" width="50%">
    <p>{{ $p->price }}</p>
    @endforeach
</body>
</html>