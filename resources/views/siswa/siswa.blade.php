<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table siswa</title>
    <link href="{{ asset('style/stylesiswa.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="logo">
        <img class="profile-img" src="image/logopplg.png" alt="Logo">
    </div>
    <div class="navigation">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="profile">About</a></li>
            <li><a href="cv">Portofolio</a></li>
            <li><a href="#">Content</a></li>
        </ul>
    </div>
    <div class="wrapper">
        <div class="header">
            <h1 class="welcome-text">PPLG 1</h1>
        </div>
    </div>

    @include('sweetalert::alert')
    <div class="container">
        <a href="siswa/create" class="btn btn-outline-primary mt-3 mb-2">Tambah</a>
        <div>
            @if (session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                @php
                    $no=1;
                @endphp
                <tbody>
                    @foreach ($siswa as $data)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->nis}}</td>
                        <td>{{$data->nama}}</td>
                        <td>{{$data->tempat_lahir}}</td>
                        <td>{{$data->tgl_lahir}}</td>
                        <td>{{$data->alamat}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->no_telepon}}</td>
                        <td>{{$data->jenis_kelamin}}</td>
                        <td>
                            <a type="submit" class="btn btn-outline-danger mb-2 delete" data-id="{{$data->id}}" data-nama="{{$data->nama}}">Delete</a>
                            <a type="button" class="btn btn-outline-warning mb-2" href="{{ route('siswa.edit', ['siswa' => $data]) }}">Edit</a>
                            <a type="button" class="btn btn-outline-secondary" href="{{ route('siswa.show', ['siswa' => $data]) }}">Show</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    <script>
        $('.delete').click(function () {
            var id = $(this).data('id');
            var nama = $(this).data('nama');

            swal({
                title: "Apakah anda yakin?",
                text: "Tidak bisa direstore kembali",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    window.location = "/siswa/" + id + "/destroy";
                    swal("BAMMMMM data anda telah terhapus", {
                        icon: "success",
                    });
                } else {
                    swal("Okeyyyy");
                }
            });
        });
    </script>
</body>
</html>
