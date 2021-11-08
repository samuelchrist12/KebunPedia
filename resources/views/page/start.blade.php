<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-s8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/kebunPedia.css">
    <link rel="stylesheet" href="css/page.css">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    {{-- NavBar --}}
    <nav class="navbar navbar-expand-lg navbar-light transparan">
        <div class="container-fluid">
            <a class="logo" href="{{url('')}}">KebunPedia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="row pasLayar">
        <div class="col">
            <div class="page">
                <h1 align="center"><b> KebunPedia </b></h1>
                <h4 align="center"> Mari Menanam, Belajar <br> dan berkomunitas</h4>
                <a href="{{url('login')}}" type="button" class="btn btn-success tombolLogin">Login</a>
                <a href="{{url('register')}}" type="button" class="btn btn-success tombolRegist">Register</a>
            </div>
        </div>


        <div class="col pageCont">
            <br>
            <h3 align="center"> Apa itu KebunPedia? </h3>
            <hr>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner carousel-dark">
                  <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1495603157807-8539e80db676?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block depan">
                      <h5>Komunitas baru untuk anda</h5>
                      <p>Kebunpedia akan membantu anda untuk mencari komunitas para penggiat berkebun yang dapat anda ikuti dan berkembang bersama-sama</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1488998427799-e3362cec87c3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block depan">
                      <h4>Tempat untuk belajar</h4>
                      <p>Anda bisa mendapatkan informasi yang penting untuk kegiatan berkebun melalui media forum ataupun kelas yang akan diajar oleh tutor-tutor hebat.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            <br>
        </div>
    </div>
    {{-- footer --}}
    <footer class="text-white text-center text-lg-start warnaFoot fixed-bottom ">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2021 Copyright:
          <a class="text-white" href="">KebunPedia</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>
