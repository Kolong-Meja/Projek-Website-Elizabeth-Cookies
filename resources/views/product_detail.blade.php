<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
</head>
<body style="background-color: white">
    @if (Auth::user())
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded mb-5">
                        <div class="card-body">
                            <a href="{{ route('product.index') }}" class="btn btn-md btn-success mb-3">Back To Home</a>
                            <div class="name">
                                <p class="font-weight-bold">{{ $product->name }}</p>
                            </div>
                            <img class="card-img-top shadow rounded mb-5" src="{{ asset('image/'.$product->image) }}" alt="Card image" style="width:50%">
                            <div class="description">
                                <p class="font-weight-bold">Deskripsi</p>
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="price">
                                <p class="font-weight-bold">Harga</p>
                                <p>Rp.{{ $product->price }}</p>
                            </div>
                            <div class="stock">
                                <p class="font-weight-bold">Stok</p>
                                <p>{{ $product->quantity }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>