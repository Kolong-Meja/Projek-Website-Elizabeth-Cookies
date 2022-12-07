<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('home.index') }}" class="btn btn-md btn-success mb-3">Back To Home</a>
                    <a href="{{ route('product.index') }}" class="btn btn-md btn-success mb-3">Product</a>
                    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                         <div class="form-group">
                            <label class="font-weight-bold">Admin ID</label>
                            <input type="number" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id', $product->user_id) }}" placeholder="Masukkan ID Admin">
                        
                            <!-- error message untuk title -->
                            @error('user_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="font-weight-bold">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $product->name) }}" placeholder="Masukkan Nama Produk">
                        
                            <!-- error message untuk title -->
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Deskripsi Produk">{{ old('descrption', $product->description) }}</textarea>
                        
                            <!-- error message untuk content -->
                            @error('description')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Price</label>
                            <input type="number" min="5000" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', $product->price) }}" placeholder="Masukkan Harga Produk">
                        
                            <!-- error message untuk content -->
                            @error('price')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Quantity</label>
                            <input type="number" min="1" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity', $product->quantity) }}" placeholder="Masukkan Jumlah Produk">
                        
                            <!-- error message untuk content -->
                            @error('quantity')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">Update</button>
                        <button type="reset" class="btn btn-md btn-warning">Reset</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
{{-- <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script> --}}