<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('home.index') }}" class="btn btn-md btn-success mb-3">Back To Home</a>
                    <a href="{{ route('product.index') }}" class="btn btn-md btn-success mb-3">Product</a>
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

                            <form action="{{ route('order.store', $product->name) }}" method="POST" enctype="multipart/form-data">
                    
                                @csrf
                            
                                <div class="form-group">
                                    <label class="font-weight-bold">Input Your Name</label>
                                    <input type="text" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ $user->name }}" readonly>
                                
                                    <!-- error message untuk title -->
                                    @error('user_name')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            
                                <div class="form-group">
                                    <label class="font-weight-bold" for="product_name">Product You Want Buy</label>
                                    <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ $product->name }}" readonly>
                                
                                    <!-- error message untuk title -->
                                    @error('product_name')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            
                                <div class="form-group">
                                    <label class="font-weight-bold">How Many Product That You Want Buy</label>
                                    <input type="number" min="1" max={{ $product->quantity }} class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}">
                                
                                    <!-- error message untuk title -->
                                    @error('quantity')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            
                                <button type="submit" class="btn btn-md btn-primary">Order</button>
                                <button type="reset" class="btn btn-md btn-warning">Reset</button>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>