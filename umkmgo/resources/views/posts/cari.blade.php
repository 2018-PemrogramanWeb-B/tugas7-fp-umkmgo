@extends('layouts.app')

@section('title')
UMKMgo - Eksplorasi  
@endsection
  
@section('content')
<main role="main">
  <section class="jumbotron text-center container">
    <div class="container">
      <h1 class="jumbotron-heading">PRODUK YANG POPULER</h1>
    </div>
  </section>

  <div class="album py-5 bg-light container">
    {{-- dropdown section --}}
      <div class="dropdown pb-3">
          <button class="btn dropdown-toggle" style="background-color:#025E73" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kategori
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Makanan dan Minuman</a>
            <a class="dropdown-item" href="#">Kerajinan Tangan</a>
            <a class="dropdown-item" href="#">Lain Lain</a>
          </div>
        </div>
        {{-- dropdown section --}}
      <div class="row">
        {{--batas atas--}}
        @foreach ($posts as $item)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a href="/pop"><img class="card-img-top" src="{{$item->gambar}}" alt="Card image cap">
              <div class="card-body">
              <p class="card-text"> <a href="/show/{{$item->id}}">{{$item->judul}}</a></p>
              </div></a>
            </div>
          </div>
        @endforeach
        {{--ini batas bawha--}}
        
        
        {{ $posts->links() }}
    </div>
</div>
</div>

</main>

@endsection
    