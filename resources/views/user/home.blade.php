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
    <title>Home</title>
</head>
<body style="background-color: #cfdfda;">
    {{-- NavBar --}}
    <nav class="navbar navbar-expand-lg navbar-light warnaNav">
        <div class="container-fluid">
            <a class="logo" href="#"> <img src="img\logo1.png" alt="" style="width: 2em;"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('forum')}}">Forum</a></li>
                        <li><a class="dropdown-item" href="{{url('shop')}}">Partner Shop</a></li>
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

    <div class= "content">
        {{-- carausel atas  --}}
        <div class="container">
            <div class="row">
                <?php if ($hak!='0'){ ?>
                    <div class="col-9 ">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img\Frame 4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img\Frame 7.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img\Frame 8.jpg" class="d-block w-100" alt="...">
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    {{-- profil --}}
                    <div class="col ">
                        <div class="container profil">
                            @foreach($data as $key => $d)
                            <div style="width:6em; margin-left:auto; margin-right:auto;">
                                <img src="img/{{ $d->jenis_kelamin }}.png" alt="" style="width:100%; margin-left:auto; margin-right:auto;">
                            </div>
                            <h1>Halo,</h1>
                            <h5>{{ $d->nama }}</h5>
                            <a href="#" class="btn btn-sm btn-success disabled" tabindex="-1" aria-disabled="true" role="button" data-bs-toggle="button">{{$pin}}</a>
                            @endforeach
                        </div>
                    </div>
                <?php }else { ?>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img\Frame 4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\Frame 7.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img\Frame 8.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <?php } ?>
            </div>
            <br>
            <div class="row">
                <div class="col menu1">
                    <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16">
                                <path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"/>
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                              </svg>
                        </div>
                        <div class="col  ">
                            <h4><b> &nbsp; Our Recomended Shop </b></h4>
                        </div>
                    </div>
                    <br>
                    @forelse ($partnershops as $shop)
                    <div class="row bubble3" >
                        <div class="col-4">
                            <img src="img/{{$shop->foto}}" class="card-img-top" alt="...">
                        </div>
                        <div class="col">
                            <h5>{{$shop->namaToko}}</h5>
                            <p style="font-size: 14px;">{{$shop->alamat}}</p>
                            <a href="#" class="card-link link-light " align="right">Ke toko</a>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
                <div class="col-5 menu2">
                    <div class="row">
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-quote" viewBox="0 0 16 16">
                                <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                <path d="M7.066 6.76A1.665 1.665 0 0 0 4 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
                            </svg>
                        </div>
                        <div class="col  ">
                            <h4><b> &nbsp; Top Discusion </b></h4>
                        </div>
                    </div>
                    <br>
                    @forelse ($forums as $forum)
                    <div class="row bubble2" >
                        <div class="col">
                            <h5><b>{{$forum->judul}}</b></h5>
                            <p style="font-size: 14px;">Pembuat : {{$forum->pembuat}} <br>
                            Update terbaru: {{$forum->updated_at}}</p>
                            <div><p style="font-size: 24px;">{{$forum->deskripsi}}</p></div>
                            <span><a href="{{url('lah'.$forum->id)}}" class="card-link link-dark">Lihat forum</a><p>tags : {{$forum->tags1}}</p></span>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
                <div class="col-3 menu3">
                    <div class="row">
                        <div class="col-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                            </svg>
                        </div>
                        <div class="col  ">
                            <h4><b> &nbsp; Class for you </b></h4>
                        </div>
                    </div>
                    <br>
                    <div class="row bubble1" >
                        <div class="col-4">
                            <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQHikN6EXPd23Q/company-logo_200_200/0/1595359131127?e=2159024400&v=beta&t=S5MNjBDjiH433VCWzjPeiopNDhxGwmfcMk4Zf1P_m_s" class="card-img-top" alt="...">
                        </div>
                        <div class="col">
                            <h6>Comingsoon</h6>
                            <p style="font-size: 14px;">Still in development</p>
                            {{-- <a href="#" class="card-link link-light">Another link</a> --}}
                        </div>
                    </div>
                </div>
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
