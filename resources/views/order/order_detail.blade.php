<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
   <h2>Test123</h2>
   @foreach($order as $o)
   <p>{{ $o->product_id }}</p>
   <p>{{ $o->user_id }}</p>
   @endforeach
</body>
</html>