<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('home.index') }}" class="btn btn-md btn-success mb-3">Back To Home</a>
                    <a href="{{ route('product.index') }}" class="btn btn-md btn-success mb-3">Product</a>
                    <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Input Your Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}">
                        
                            <!-- error message untuk title -->
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="exampleFormControlSelect1">Choose Product That You Want Buy</label>
                            <select class="form-control" name="product_id" id="exampleFormControlSelect1">
                                @foreach($products as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}</option>    
                                @endforeach
                            </select>
                        
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
</body>
</html>