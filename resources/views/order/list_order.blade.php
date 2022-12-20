<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($order as $o)
                <div class="col">
                    <div class="card mb-5 border-primary shadow-sm p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <h5 class="card-title">{{ $o->product_name }}</h5>
                            <p>Quantity {{ $o->quantity }}</p>
                            <p> Order at {{ $o->created_at }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>