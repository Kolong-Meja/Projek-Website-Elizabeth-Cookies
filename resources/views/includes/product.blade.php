@foreach ($product as $p)
    @foreach($list_product as $list)
        @if ($list->id == $p->id)
            <!-- Batas Buka Kotak Box-->
            <div class="col-md-3 JarakBawahHP">
                <div class="card h-100 CardProduct">
                    <a href="{{ route('product.show', $p->name )}}">
                        <img class="card-img-top" src="{{ 'image/' }}{{ $p->image }}" alt="Card image" style="width:100%">
                    </a>
                    <div class="card-body">
                    <h4 class="card-title">{{ $p->name}}</h4>
                    <p class="card-text">{{ $p->description }}</p>
                    </div>

                    @if ($is_login)
                    <div class="Buy">
                        {{-- <a href="https://wa.me/6285693426186?text=Saya%20Pesan%20Lidah%20Kucing">BUY NOW!</a> --}}
                        <a href="{{ route('create', $p->name)}}">ORDER NOW!</a>
                    </div>
                    @endif
                </div>

                <!--Batas Tutup Kotak Box -->
                <div class="Box">
                    Rp. {{ $p->price }}
                </div>
            </div>
        @endif
    @endforeach
@endforeach