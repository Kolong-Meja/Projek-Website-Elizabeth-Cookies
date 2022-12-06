<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
</head>
<body>
    <h2>Welcome to Order Page</h2>
    @if (session()->has('message'))
        <p>{{ session()->get('message') }}</p>
    @endif
</body>
</html>