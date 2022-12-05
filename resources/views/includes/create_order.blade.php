<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Product ID</label>
                            <input type="number" min="1" class="form-control @error('product_id') is-invalid @enderror" name="product_id" value="{{ old('product_id') }}" placeholder="Masukkan product ID">
                        
                            <!-- error message untuk title -->
                            @error('product_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">User ID</label>
                            <input type="number" min="2" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" placeholder="Masukkan user ID">
                        
                            <!-- error message untuk title -->
                            @error('user_id')
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