<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>SHOW</title>

    <!-- Menggunakan Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Gaya Kustom -->
    <style>
        /* Gaya kustom untuk label */
        label {
            font-weight: bold;
            color: #333;
        }
        
        /* Gaya kustom untuk input text */
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
        }
        
        /* Gaya kustom untuk tombol */
        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }
        
        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Gaya kustom untuk container */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        
        /* Gaya kustom untuk judul */
        .mt-4 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">SHOW</h1>
        <form method="GET" action="{{ route('siswa.show', ['siswa' => $siswa->id]) }}">
            @csrf
            @method('put')
            @include('sweetalert::alert')
            <div class="form-group">
                <label for="nis">NIS:</label>
                <p>{{$siswa->nis}}</p>
            </div>
        
            <div class="form-group">
                <label for="nama">Nama:</label>
                <p> {{$siswa->nama}}</p>
            </div>
        
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir:</label>
                <p>{{$siswa->tempat_lahir}}</p>
            </div>
        
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir:</label>
               <p>{{$siswa->tgl_lahir}}</p>
            </div>
        
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <p>{{$siswa->alamat}}</p>
            </div>
        
            <div class="form-group">
                <label for="email">Email:</label>
               <p>{{$siswa->email}}</p>
            </div>
        
            <div class="form-group">
                <label for="no_telepon">No. Telepon:</label>
                <p> {{$siswa->no_telepon}} </p>
            </div>
        
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <p>{{$siswa->jenis_kelamin}}</p>
            </div>
        </form>
    </div>

    <!-- Menggunakan Bootstrap JavaScript (Penting untuk beberapa fungsi Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
