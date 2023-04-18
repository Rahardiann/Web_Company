<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/web/home.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">



<body>


    <!-- navbar -->




    <!-- main menu -->
        @include('web.navbar.navbar')
        <div class="home">
            <div class="sujawe">
                <img src="{{asset('img/sujinawa-05.jpg')}}" alt="Snow">
            </div>
            <button class="btn-contact  " href="{{route('contact')}}">
                    <a class="btn-font" href="{{route('contact')}}">Hubungi Kami</a>
            </button>

            <h3 class="new">Produk terbaru<h3>

            <div class="product-grid">
                @foreach($latest as $catalog)
                 <div>
                    <img src="{{asset('storage/catalogs/'.$catalog->image)}}" style="width: 100%;height: 200px;object-fit:cover;">
                    <title>Placeholder</title>
                    <div class="card-tampilan">
                        <p class="card-text judul-produk"><b>{{$catalog->title}}</b></p>
                        <p class="card-text harga-produk">{{$catalog->price}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('detail')}}"><button type="submit"
                                        class="btn1">Detail</button></a>
                            </div>
                            <small class="text-muted"></small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

          
        </div>
        @include('web.footer.footer')
    





    <!-- footer -->



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>