@extends('template.navbar')

@section('title')
    UMKMgo - Beranda
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
<header class="masthead text-center text-dark d-flex" >
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <h1 style="color:whitesmoke">
          <strong>UMKMgo</strong>
        </h1>
      </div>
      <div class="col-lg-8 mx-auto">
        <p class=" mb-5" style="color:white">Ini Tagline</p>
        <a target="_blank" class="btn btn-outline-white btn-lg waves-effect waves-light" style="color:black" href="/form">Daftar Sekarang</a>
      </div>
    </div>
  </div>
</header> 
@endsection