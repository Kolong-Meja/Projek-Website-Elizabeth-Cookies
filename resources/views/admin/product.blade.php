<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Page test</title>
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