<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pinjam Buku</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/rpl.css') }}">
    <style>
        .bg{
            background: url('bg1.jpg');
            background-position: center;
            background-size: cover;
        }
        .bg-black{
            background-color: black;
        }
    </style>

</head>
<body class="bg">
    
        <header class="masthead d-flex" style="color:white">
                <div class="container text-center my-auto">
                  <h1 class="mb-1">RBTC Book's</h1>
                  <h5 class="mb-5">
                    Sistem Peminjaman Buku RBTC Online
                  </h5>
                  <a class="btn btn-xl bg-black" style="color:white"href="/form">Pinjam Disini</a>
                </div>
                <div class="overlay"></div>
              </header>
    
</body>
</html>