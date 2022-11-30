@foreach ($product as $p)
@if ($p->id == 1)
<!-- Batas Buka Kotak Box-->
<div class="col-md-3 JarakBawahHP">
  <div class="card h-100 CardProduct">
    <img class="card-img-top" src="{{ 'image/' }}{{ $p->image }}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">{{ $p->name}}</h4>
      <p class="card-text">{{ $p->description }}</p>
    </div>
    <div class="Buy">
      <a href="https://wa.me/6285693426186?text=Saya%20Pesan%20Lidah%20Kucing">BUY NOW!</a>
    </div>
  </div>

  <!--Batas Tutup Kotak Box -->
  <div class="Box">
    Rp.{{ $p->price }}
  </div>
</div>
@endif
@endforeach

@foreach($product as $p)
@if ($p->id == 2)
<!--Batas Buka Kotak Box-->
<div class="col-md-3 JarakBawahHP">
  <div class="card h-100 CardProduct">
    <img class="card-img-top" src="{{ 'image/' }}{{ $p->image }}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">{{ $p->name }}</h4>
      <p class="card-text">{{ $p->description }}</p>
    </div>  
    <div class="Buy">
      <a href="https://wa.me/6285693426186?text=Saya%20Pesan%20Almond%20Chocochips">BUY NOW!</a>
    </div>
  </div>
  <!--Batas Tutup Kotak Box -->
  <div class="Box">
    Rp.{{ $p->price}}
  </div>
</div>
@endif
@endforeach

@foreach($product as $p)
@if ($p->id == 3)
<!--Batas Buka Kotak Box -->
<div class="col-md-3 JarakBawahHP">
  <div class="card h-100 CardProduct">
    <img class="card-img-top" src="{{ 'image/' }}{{ $p->image }}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">{{ $p->name }}</h4>
      <p class="card-text">{{ $p->description }}</p>
    </div>
    <div class="Buy">
      <a href="https://wa.me/6285693426186?text=Saya%20Pesan%20Nastar%20Keju">BUY NOW!</a>
    </div>
  </div>
  <!--Batas Tutup Kotak Box-->
  <div class="Box">
    Rp.{{ $p->price }}
  </div>
</div>
@endif
@endforeach

@foreach($product as $p)
@if ($p->id == 4)
<!--Batas Buka Kotak Box-->
<div class="col-md-3 JarakBawahHP">
  <div class="card h-100 CardProduct">
    <img class="card-img-top" src="{{'image/'}}{{$p->image}}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">{{ $p->name }}</h4>
      <p class="card-text">{{ $p->description }}</p>
    </div>
    <div class="Buy">
      <a href="https://wa.me/6285693426186?text=Saya%20Pesan%20Putri%20Salju">BUY NOW!</a>
    </div>
  </div>
  <!--Batas Tutup Kotak Box-->
  <div class="Box">
    Rp.{{ $p->price }}
  </div>
</div>
@endif
@endforeach
