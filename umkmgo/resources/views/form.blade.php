@extends('layouts.app')


@section('title')
    UMKMgo - Post
@endsection


@section('css')
    <style>
      .color-tos{
            background-color: #6099A6;
        }
    </style>
@endsection

@section('content')
<div class="container " style="width:500px">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<br>
<h1 class="pbot">Daftarkan Produk Anda</h1>
<form action="{{url('/posts')}}" method="POST">
{{@csrf_field()}}
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Produk</label>
        <input type="text" class="form-control" name="judul" aria-describedby="emailHelp" placeholder="Nama Produk">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Deskripsi</label>
        <textarea class="form-control" name="deskrip" placeholder="Deskripsi"></textarea> 
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Alamat Usaha anda">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Link Gambar</label>
        <input type="text" class="form-control" name="gambar" placeholder="Link Gambar">
    </div>
    <button type="submit" class="btn btn-primary" name="post">Submit</button>
</form>
</div>
@endsection