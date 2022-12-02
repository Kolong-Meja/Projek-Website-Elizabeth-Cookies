<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
</head>
<body>
    <h2>Welcome to Admin Page!</h2>
    @foreach ($admin as $a)
    <p>{{ $a->id }}</p>   
    @endforeach
    <p>{{ $auth_admin }}</p>
    <form action="#" method="post">
        @csrf
        <div class="col-name">
            <label for="product-name">Name:</label>
            <input type="text" name="name" class="name" required />
        </div>
        <div class="submit-btn">
            <input type="submit" value="Submit" />
        </div>
    </form>
</body>
</html>