@extends('template.navbar')

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
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
              <a href="/pop"><img class="card-img-top" data-src="http://2.bp.blogspot.com/-ojyjGLd4KtA/U2-fwPUyp_I/AAAAAAAAAJU/eu4Hao-86rI/s1600/10257315_10201304578009992_5640924761222533133_o.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Coklat yang Bisa Dimakan</p>
            </div></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <a href="/pop"><img class="card-img-top" data-src="http://2.bp.blogspot.com/-ojyjGLd4KtA/U2-fwPUyp_I/AAAAAAAAAJU/eu4Hao-86rI/s1600/10257315_10201304578009992_5640924761222533133_o.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Masker Cantik</p>
            </div></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
              <a href="/pop"><img class="card-img-top" data-src="http://2.bp.blogspot.com/-ojyjGLd4KtA/U2-fwPUyp_I/AAAAAAAAAJU/eu4Hao-86rI/s1600/10257315_10201304578009992_5640924761222533133_o.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Taplak Kiyowo</p>
            </div></a>
          </div>
        </div>
    </div>
</div>
</div>

</main>

@endsection
    