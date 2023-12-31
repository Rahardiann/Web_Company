<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('css/web/navbar.css')}}">

</head>
<body>
    

<nav class="navbar navbar-expand-lg" >
    <div class="container" >
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('produk')}}">Produk</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('layanan')}}">Produk dan layanan</a>
            </li>

            
            <li class="nav-item">
                <a class="nav-link" href="{{route('galery')}}">Galery</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item mt-1">
                <div class="searchbar">
                    <form method="get" action="{{route('produk')}}" class="d-flex">
                        <input class="search px-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                        <button class="btn btn-sm">Search
                    </form>
                </div>
            </li>
        </ul>
        </div>
    </div>
    
    </nav>     
 
</body>
</html>