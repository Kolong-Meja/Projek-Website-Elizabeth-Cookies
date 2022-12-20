<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container mt-5 mb-5">
        <a href="{{ route('home.index') }}" class="btn btn-md btn-success mb-3">Back To Home</a>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($orders as $o)
                <div class="col">
                    <div class="card mb-5 border-primary shadow-sm p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <img class="card-img-top mb-3" src="{{ asset('image/'.$o->product_image) }}" alt="product_image">
                            <h5 class="card-title">{{ $o->product_name }}</h5>
                            <p class="card-text">Username: {{ $o->name }}</p>
                            <p class="card-text">Quantity: {{ $o->quantity }} pcs</p>
                            <p class="card-text">Sub Total: Rp.{{ $o->quantity * $o->product_price }},00</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-muted"> Order at {{ $o->created_at }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>