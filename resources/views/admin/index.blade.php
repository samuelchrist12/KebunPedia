<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Data User</title>
</head>
<body>
<div class="container mt-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 align="center">Data User</h3>
        </div>
        <div class="panel-body">
            <div class="input-group custom-search-form">
                <a href="{{url('logout')}}" type="button" class="btn btn-success">Log Out</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($members as $member)
                    <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$member->nama}}</a></td>
                    <td>{{$member->email}}</td>
                    <td>{{$member->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
                    <td>{{$member->pekerjaan}}</td>
                    <td>
                        <a href="{{url('delete',array($member->id))}}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                    </tr>
                    @empty
                    <td colspan="6" class="text-center">Tidak ada data...</td>
                    @endforelse
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
