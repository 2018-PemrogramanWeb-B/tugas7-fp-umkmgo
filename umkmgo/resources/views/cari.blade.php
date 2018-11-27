@extends('template.navbar')

@section('title')
UMKMgo - Eksplorasi  
@endsection

@section('css')
    <style>
        .bg{
          background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url('bg2.jpg');
          background-position: center;
          background-size: cover;
        }
    
    </style>
@endsection

@section('body')
    class="bg bg-overlay"
@endsection
  
@section('content')
<main role="main">
  <section class="jumbotron text-center container">
    <div class="container">
      <h1 class="jumbotron-heading">PRODUK YANG POPULER</h1>
    </div>
  </section>

  <div class="album py-5 bg-alifi container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
              <a href="/pop"><img class="card-img-top" img src="http://2.bp.blogspot.com/-ojyjGLd4KtA/U2-fwPUyp_I/AAAAAAAAAJU/eu4Hao-86rI/s1600/10257315_10201304578009992_5640924761222533133_o.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <p class="card-text">Coklat yang Bisa Dimakan</p>
            </div></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <a href="/pop"><img class="card-img-top" img src="http://2.bp.blogspot.com/-ojyjGLd4KtA/U2-fwPUyp_I/AAAAAAAAAJU/eu4Hao-86rI/s1600/10257315_10201304578009992_5640924761222533133_o.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <p class="card-text">Masker Cantik</p>
            </div></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
              <a href="/pop"><img class="card-img-top" img src="http://2.bp.blogspot.com/-ojyjGLd4KtA/U2-fwPUyp_I/AAAAAAAAAJU/eu4Hao-86rI/s1600/10257315_10201304578009992_5640924761222533133_o.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <p class="card-text">Taplak Kiyowo</p>
            </div></a>
          </div>
        </div>
               <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
              <a href="/pop"><img class="card-img-top" img src="http://2.bp.blogspot.com/-ojyjGLd4KtA/U2-fwPUyp_I/AAAAAAAAAJU/eu4Hao-86rI/s1600/10257315_10201304578009992_5640924761222533133_o.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <p class="card-text">Coklat yang Bisa Dimakan</p>
            </div></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <a href="/pop"><img class="card-img-top" img src="http://2.bp.blogspot.com/-ojyjGLd4KtA/U2-fwPUyp_I/AAAAAAAAAJU/eu4Hao-86rI/s1600/10257315_10201304578009992_5640924761222533133_o.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <p class="card-text">Masker Cantik</p>
            </div></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
              <a href="/pop"><img class="card-img-top" img src="http://2.bp.blogspot.com/-ojyjGLd4KtA/U2-fwPUyp_I/AAAAAAAAAJU/eu4Hao-86rI/s1600/10257315_10201304578009992_5640924761222533133_o.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <p class="card-text">Taplak Kiyowo</p>
            </div></a>
          </div>
        </div>
    </div>
</div>
</div>

</main>

@endsection
    