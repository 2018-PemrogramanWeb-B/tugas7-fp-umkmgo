<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <link rel="stylesheet" href="{{ asset('css/w3s.css') }}">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
      <link rel="stylesheet" href="{{ asset('css/aw.css') }}">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        body, html {
          height: 100%;
          line-height: 1.8;
      }
      /* Full height image header */
      .bgimg-1 {
          background-position: center;
          background-size: cover;
          background-image: url("/w3images/mac.jpg");
          min-height: 100%;
      }
      .w3-bar .w3-button {
          padding: 16px;
      }
        .font{
            font-size: 10px;
        }
        .ptop{
            padding-top: 10%;
        }
        
    </style>
</head>
<body>
        <div class="container ptop">
                @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                    <a href="/form"> Klik disini untuk meminjam buku</a>
                </div>
            @endif
        
            <div class="row">
                <div class="col-md-12">
                <h4><b>Peminjaman Buku RBTC</b></h4>
                <br>
                <div class="table-responsive">       
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tenggat Peminjaman</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
            <td>{{$post->nama}}</td>
            <td>{{$post->nrp}}</td>
            <td>{{$post->buku}}</td>
            <td>{{$post->tgl_pin}}</td>
            <td>{{$post->tgl_blk}}</td>
                <td><a href="/edit/{{$post->id}}" class="btn btn-primary ">EDIT</a></td>
            <td><a href="/delete/{{ $post->id }}"><button class="btn btn-danger font" style="height: auto">DELETE</button></a></td>
                </tr>
            @endforeach
            </tbody>
                
        </table>             
        </div>
                    
                </div>
            </div>
        </div>
    
</body>
</html>