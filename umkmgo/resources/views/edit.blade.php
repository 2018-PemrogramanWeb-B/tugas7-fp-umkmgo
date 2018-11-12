<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Peminjaman</title>
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
            padding-top: 5%;
        }
        .pbot{
            padding-bottom: 3%;
        }
        
    </style>
</head>
<body>
        <div class="container ptop" style="width:500px">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                    <a href="/table"> Klik disini untuk melihat table</a>
                </div>
            @endif
            <br>
            <h1 class="pbot"> Form Peminjaman Buku RBTC</h1>
        <form action="{{url('/update')}}" method="POST">
            {{@csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" name="nama" aria-describedby="emailHelp" value="{{$post->nama}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">NRP</label>
                    <input type="text" class="form-control" name="nrp" value="{{$post->nrp}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Buku</label>
                    <input type="text" class="form-control" name="buku" value="{{$post->buku}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Peminjaman</label>
                    <input type="text" class="form-control" name="tgl_pin" value="{{$post->tgl_pin}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Kembali</label>
                    <input type="text" class="form-control" name="tgl_blk" value="{{$post->tgl_blk}}">
                </div>
                <input type="hidden" class="form-control" name="id" value="{{$post->id}}">
                <button type="submit" class="btn btn-primary" name="post">Submit</button>
        </form>
        </div>
        
</body>
</html>


