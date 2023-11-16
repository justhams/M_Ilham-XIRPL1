    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CREATE</title>

        <!-- Menggunakan Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
        
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
                border: 1px solid #ccc;
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
                background-color: #ffffff;
            }
            
            /* Gaya kustom untuk judul */
            .mt-4 {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 class="mt-4">CREATE</h1>
            <form id="insertForm" method="post" action="{{ route('siswa.store') }}">
                @csrf
                @method('post')
                @include('sweetalert::alert')
                <div class="form-group">
                    <label for="nis">NIS:</label>
                    @error('nis')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input value="{{old('nis')}}" type="text" name="nis" id="nis" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input value="{{old('nama')}}" type="text" name="nama" id="nama" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    @error('tempat_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input value="{{old('tempat_lahir')}}" type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir:</label>
                    @error('tgl_lahir')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input value="{{old('tgl_lahir')}}" type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    @error('alamat')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input value="{{old('alamat')}}" type="text" name="alamat" id="alamat" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="email">Email:</label>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="no_telepon">No. Telepon:</label>
                    @error('no_telepon')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input value="{{old('no_telepon')}}" type="text" name="no_telepon" id="no_telepon" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    @error('jenis_kelamin')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            
                <button type="button" class="btn btn-success" id="submitBtn">Tambah</button>
            </form>
        </div>

        <!-- Menggunakan Bootstrap JavaScript (Penting untuk beberapa fungsi Bootstrap) -->
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

        <script>
            document.getElementById("submitBtn").addEventListener("click", function (event) {
                event.preventDefault(); // Menghentikan pengiriman formulir otomatis
        
                swal({
                    title: "Apakah kamu yakin?",
                    text: "Kamu akan menambah data ke tabel siswa",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willInsert) => {
                    if (willInsert) {
                        // Mengirimkan formulir setelah pengguna mengonfirmasi
                        document.getElementById("insertForm").submit();
                    } else {
                        swal("Data tidak jadi ditambah");
                    }
                });
            });
        </script>
        
    </body>
    </html>
