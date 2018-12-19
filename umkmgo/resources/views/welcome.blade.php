@extends('layouts.app')

@section('title')
    UMKMgo - Beranda
@endsection
@section('css')
    <style>
        .bg{
          background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('bg5.jpg');
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;
        }
        .ptop{
          padding-top: 15%;
        }
          .font {
            font-family: Gibson;
            src: url('{{ public_path('font/gibson-bold.tff') }}');
          }
          .font

    </style>
@endsection

@section('body')
    class="bg bg-overlay"
@endsection

@section('content')
<header class="ptop text-center text-dark d-flex" >
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-10 mx-auto font">
        <h1 style="color:whitesmoke; font-size:85px">
          <strong>UMKMgo</strong>
        </h1>
      </div>
      <div class="col-lg-8 mx-auto">
        <p style="font-family: Adriane; src: url('{{ public_path('font/Adriane Text Regular.tff') }}'); font-size: 2px"> </p>
        <p class=" mb-3" style="color:white; font-size: 22px">Majukan Indonesia dengan UMKM!</p>
        <p style="font-size: 16px"> </p>
        <a target="_blank" class="btn btn-md waves-effect waves-light" style="background-color:#f28300" href="/form">Daftar Sekarang</a>
      </div>
    </div>
  </div>
</header> 
@endsection