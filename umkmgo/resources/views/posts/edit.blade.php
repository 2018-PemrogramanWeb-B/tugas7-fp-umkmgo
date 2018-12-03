@extends('layouts.app')

@section('title')
    UMKMgo - Post
@endsection

@section('content')
<div class="container " style="width:500px">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
        <a href="/table"> Klik disini untuk melihat table</a>
    </div>
@endif
<br>
<h1 class="pbot">Daftarkan Produk Anda</h1>
<form action="{{url('/update')}}" method="POST">
{{@csrf_field()}}
    <div class="form-group">
        <label for="exampleInputEmail1">Nama Produk</label>
    <input type="text" class="form-control" value="{{$posts->judul}}" name="judul" aria-describedby="emailHelp" placeholder="Nama Produk">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Deskripsi</label>
    <input type="text" class="form-control" value="{{$posts->deskrip}}" name="deskrip" placeholder="Deskripsi">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" name="alamat" value="{{$posts->alamat}}" placeholder="Alamat Usaha anda">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Link Gambar</label>
    <input type="text" class="form-control" value="{{$posts->gambar}}" name="gambar" placeholder="Link Gambar">
    </div>
<input type="hidden" name="id" value="{{$posts->id}}">
    <button type="submit" class="btn btn-primary" name="post">Submit</button>
</form>
</div>
@endsection