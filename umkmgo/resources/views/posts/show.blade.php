@extends('layouts.app')

@section('title')
    UMKMgo - Post
@endsection

@section('content')
<div class="container">

        <div class="row">
          @php
              
          @endphp
          <!-- Post Content Column -->
          <div class="col-lg-8">
  
            <!-- Title -->
          <h1 class="mt-4">{{$posts->judul}}</h1>
  
            <!-- Author -->
            <p class="lead">
              Oleh
            {{-- <a href="#">{{$posts->users_id->name}}</a> --}}
            {{$idnya->name}}
            </p>
  
            <hr>
  
            <!-- Date/Time -->
            <p>Ditulis pada {{$posts->created_at}}</p>
  
            <hr>
  
            <!-- Preview Image -->
          <img class="img-fluid rounded" src="{{$posts->gambar}}" alt="gambar">
  
            <hr>
  
            <!-- Post Content -->
          <p>{{$posts->deskrip}}</p>
         
              
          @if ($posts->users_id == $yanglogin )
          <a href="{{url('/edit/'.$posts->id)}}"><input type="button" value="Sunting"></a>
          <a href="{{url('/delete/'.$posts->id)}}"><input type="button" value="Hapus"></a>
          @else
              
          @endif
  
            <!-- Single Comment -->
           
                <h3>Komentar</h3>
                @if (count($comments)>0)
                @foreach ($comments as $item2)
                <div class="media mb-4">
                   <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    
                    
                    <div class="media-body">
                {{$item2->deskrip}}
                      @if ($item2->users_id == $yanglogin)
                    <a href="{{url('/show/comment/delcom/'.$item2->id) }}">Hapus</a>
                      @endif
              </div>
            </div>
            @endforeach
                @else
                    Jadilah pemberi komentar pertama !
                @endif
                
             
  
            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Tinggalkan komentar :</h5>
                <div class="card-body">
                <form method="POST" action="{{url('/show/comment/simpan')}}">
                  @csrf
                    <div class="form-group">
                      <textarea class="form-control" rows="3" name="deskrip"></textarea>
                    </div>
                  <input type="hidden" name="posts_id" value="{{$posts->id}}">
                  <input type="hidden" name="users_id" value="{{$yanglogin}}">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
  
          </div>
  
          <!-- Sidebar Widgets Column -->
          <div class="col-md-4">
  
            <!-- Search Widget -->
            
  
            
          
  
            
  
          </div>
  
        </div>
        <!-- /.row -->
  
      </div>
@endsection