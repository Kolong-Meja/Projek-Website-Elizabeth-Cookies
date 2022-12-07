<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded mb-5">
                    <div class="card-body">
                        <a href="{{ route('product.index') }}" class="btn btn-md btn-success mb-3">Back To Home</a>
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                <p>{{ session()->get('success') }}</p>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="user_name">
                                    <label class="font-weight-bold" for="user_name">Costumer Name</label>
                                    <p >{{ $get_latest_order->user_name }}</p>
                                </div>
        
                                <div class="product_name">
                                    <label class="font-weight-bold" for="user_name">Product Name</label>
                                    <p>{{ $product->products->name }}</p>
                                </div>
        
                                <div class="product_name">
                                    <label class="font-weight-bold" for="user_name">Product Price</label>
                                    <p>Rp. {{ $product_price }}</p>
                                </div>
                                
                                <div class="quantity">
                                    <label class="font-weight-bold" for="user_name">Total Product Ordered</label>
                                    <p>{{ $get_latest_order->quantity }}</p>
                                </div>
        
                                <div class="sub_total">
                                    <label class="font-weight-bold" for="user_name">Sub Total</label>
                                    <p>Rp. {{ $sub_total }}</p>
                                </div>
                            </div>
                            <div class="col l-5">
                                <div class="qr_code">
                                    {!! QrCode::size(300)->generate('https://wa.me/6285693426186?text=Saya%20Pesan%20Kue') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

    