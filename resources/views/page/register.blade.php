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
        <div class="registLayer">
            <h1 align="center"><b> KebunPedia </b></h1>
            <h4 align="center"> Mari Menanam, Belajar <br> dan berkomunitas</h4>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('members.store') }}" method="POST">
                @csrf
                <input type="text" class="form-control col-form-label-lg jarakForm" id="email" name="email" placeholder="Username/Email"">
                <input type="text" class="form-control col-form-label-lg jarakForm" id="nama" name="nama" placeholder="Nama Lengkap">
                <select class="form-select jarakForm" id="jenis_kelamin" name="jenis_kelamin">
                    <option selected >Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <select class="form-select jarakForm" id="pekerjaan" name="pekerjaan">
                    <option selected>Pekerjaan</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Pengajar">Pengajar</option>
                    <option value="Petani">Petani</option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                    <option value="Wirausaha">Wirausaha</option>
                </select>
                <input type="password" class="form-control col-form-label-lg jarakForm" id="password" name="password" placeholder="Password">
                <button type="submit" class="btn btn-success col-form-label-lg tombolLogin jarakForm">Be a Member</button>
            </form>
            <p align="center" style="font-size:13px">Dengan mendaftar, anda telah menyetujui semua persyaratan dari KebunPedia</p>
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
