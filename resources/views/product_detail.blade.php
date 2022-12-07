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
                            
                           <div class="row">
                            <div class="col-md-6">
                                <img class="card-img-top shadow rounded mb-5" src="{{ asset('image/'.$product->image) }}" alt="Card image" style="width:100%">
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="name">
                                    <h2 class="font-weight-bold">{{ $product->name }}</h2>
                                </div>
                                <div class="description">
                                    <p>{{ $product->description }}</p>
                                </div>
                                <div class="price">
                                    <label class="font-weight-bold">Harga</label>
                                    <p>Rp.{{ $product->price }}</p>
                                </div>
                                <div class="stock">
                                    <label class="font-weight-bold">Stok</label>
                                    <p>{{ $product->quantity }}</p>
                                </div>
                            </div>
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

{{-- 



