<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('product.create') }}" class="btn btn-md btn-success mb-3">Create New Product</a>
                    <a href="{{ url('/') }}" class="btn btn-md btn-success mb-3">Back To Home</a>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($product as $p)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ 'image/'}}{{ $p->image }}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $p->name }}</td>
                                <td>{!! $p->description !!}</td>
                                <td>{{ $p->price }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('product.destroy', $p->id) }}" method="POST">
                                        <a href="{{ route('product.edit', $p->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                          @empty
                              <div class="alert alert-danger">
                                  Data is not available.
                              </div>
                          @endforelse
                        </tbody>
                      </table> 
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    //message with toastr
    @if(session()->has('success'))
    
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!'); 
        
    @endif
</script>