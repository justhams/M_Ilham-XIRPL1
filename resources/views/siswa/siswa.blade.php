<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table siswa</title>
    <link href="{{ asset('style/stylesiswa.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!DOCTYPE html>
<html>

<body>
    
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
                <tbody>
                    @foreach ($siswa as $siswa)
                    <tr>
                        <td>{{$siswa->id}}</td>
                        <td>{{$siswa->nis}}</td>
                        <td>{{$siswa->nama}}</td>
                        <td>{{$siswa->tempat_lahir}}</td>
                        <td>{{$siswa->tgl_lahir}}</td>
                        <td>{{$siswa->alamat}}</td>
                        <td>{{$siswa->email}}</td>
                        <td>{{$siswa->no_telepon}}</td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                       
                        <td>
                            <form method="post" action="{{ route('siswa.destroy', ['siswa' => $siswa]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger mb-2">Delete</button>
                            </form>
                            <a type="button" class="btn btn-outline-warning" href="{{ route('siswa.edit', ['siswa' => $siswa]) }}">Edit</a>
                        </td>
                        
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="sweetalert2.all.min.js"></script>
</body>
</html>