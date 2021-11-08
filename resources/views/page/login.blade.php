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

    <div class="pasLayar">
        <div class="loginLayer">
            <h1 align="center"><b> KebunPedia </b></h1>
            <h4 align="center"> Mari Menanam, Belajar <br> dan berkomunitas</h4>
            {{-- <div class="alert alert-danger">
                <ul class="mb-0">
                    <li>{{ $error }}</li>
                </ul>
            </div> --}}
            <form action="{{ route('autentikasi') }}" method="POST">
                @csrf
                <input type="text" class="form-control col-form-label-lg jarakForm" placeholder="Username/Email" aria-label="user" id="user" name="user">
                <input type="password" class="form-control col-form-label-lg jarakForm" placeholder="Password" aria-label="password" id="password" name="password">
                <button type="submit" class="btn btn-success col-form-label-lg tombolLogin jarakForm">Submit</button>
            </form>
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
