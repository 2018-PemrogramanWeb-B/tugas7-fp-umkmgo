@extends('layouts.app')

@section('title')
    UMKMgo - Beranda
@endsection
@section('css')
    <style>
        .bg{
          background: linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url('bg5.jpg');
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;
        }
        .ptop{
          padding-top: 15%;
        }
        .font{
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
      
        
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
          <strong><b>UMKMgo</b></strong>
        </h1>
      </div>
      <div class="col-lg-8 mx-auto">
        <p class=" mb-3" style="color:white; font-size: 20px">Majukan Indonesia dengan UMKM!</p>
        <a target="_blank" class="btn btn-m waves-effect waves-light" style="background-color:#024059" href="/form">Daftarkan Produk Anda Sekarang</a>
        
       
      </div>
    </div>
  </div>
</header> 
@endsection