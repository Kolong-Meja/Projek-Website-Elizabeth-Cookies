<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <a href="{{ route('product.index') }}" class="btn btn-md btn-success mb-3">Back To Product</a>

                        <div class="form-group">
                            <label class="font-weight-bold">Total Product Ordered</label>
                            <input type="number" min="1" max="10" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" placeholder="Masukkan Jumlah Produk Yang Ingin Dibeli">
                        
                            <!-- error message untuk title -->
                            @error('quantity')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">Save</button>
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