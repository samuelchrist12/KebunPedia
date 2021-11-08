<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-s8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/kebunPedia.css">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Forum</title>
</head>
<body style="background-color: #cfdfda;">
    {{-- NavBar --}}
    <nav class="navbar navbar-expand-lg navbar-light warnaNav">
        <div class="container-fluid">
            <a class="logo" href="{{url('/')}}"> <img src="img\logo1.png" alt="" style="width: 2em;"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">Forum</a></li>
                        <li><a class="dropdown-item " href="{{url('shop')}}">Partner Shop</a></li>
                        <li><a class="dropdown-item" href="#">Class</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
            <div class="btn-group" role="group" aria-label="Basic example">
                <?php if ($hak!='0'){ ?>
                <a href="{{url('logout')}}" type="button" class="btn btn-success">Log Out</a>
                <?php }else { ?>
                <a href="{{url('start')}}" type="button" class="btn btn-success">Login/Register</a>
                <a type="button" class="btn btn-success">Help</a>
                <?php } ?>
            </div>
        </div>
    </nav>

    {{-- konten --}}
    <div class="content">
        <div class="row">
            <div class="col ">
                <h2 align="center"> <b> Forum Diskusi - Buat Diskusi </b> </h2>
                <hr>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{-- form --}}
                <form action="{{ route('createForumSub') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                      <label for="pembuat" class="col-sm-2 col-form-label">Pembuat</label>
                      <div class="col-sm-10">
                        @foreach($data as $key => $d)
                        <input type="text" class="form-control" id="pembuat" name="pembuat" value="{{ $d->nama }}" readonly>
                        @endforeach
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="judul" class="col-sm-2 col-form-label">Nama Forum</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                      </div>
                    </div>
                    <fieldset class="row mb-3">
                      <legend class="col-form-label col-sm-2 pt-0">Tags</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tags1" id="tags1" value="Berkebun" checked>
                          <label class="form-check-label" for="tags1">
                            Berkebun
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="tags1" id="tags1" value="Obrolan Bebas">
                          <label class="form-check-label" for="tags1">
                            Obrolan Bebas
                          </label>
                        </div>
                      </div>
                    </fieldset>
                    <button type="submit" class="btn btn-success createForum">Buat Forum</button>
                  </form>


            </div>
            <div class="col-2 ">
                <img src="img\bannershop.png" alt="" style="width: 100%;">
            </div>
        </div>

    </div>


    {{-- footer --}}
    <footer class="text-white text-center text-lg-start warnaFoot ">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2021 Copyright:
          <a class="text-white" href="">KebunPedia</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>
