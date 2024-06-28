<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota | Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar-red {
            background-color: #BB2A33;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .nav-link {
            color: white;
        }

        .nav-link:hover {
            color: #ddd;
        }

        .nav-link-container {
            width: 100%;
        }

        .konten {
            width: 950px;
            margin-left: 60px;
            margin-top: 10px;
        }

        .informasi {
            border-top: 3px solid rgb(200, 200, 200);
            background-color: #F4EFEF;
            width: 900px;
            height: 150px;
        }

        .btn{
            position: relative;
            margin-top: -145px;
            margin-left: 650px;
            background-color: rgba(0,0,0, 0.5);
            border-radius: 25px;
            font-weight: bold;
        }
        .btn:hover{
            background-color: rgba(0,0,0, 0.75);
        }

        .info {
            border-top: 3px solid rgb(200, 200, 200);
            background-color: #F4EFEF;
            width: 900px;
            height: 275px;
            margin-top: 10px;
        }

        input {
            background-color: #A48282;
            color: #000;
            width: 550px;
            border-radius: 5px;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 p-0">
                <nav class="nav flex-column navbar-red text-center">
                    <img src="{{asset('images/logo.jpg')}}" class="img mb-5 me-4" style="width: 130px; border-radius:50%; margin-top:-80px;"
                        alt="">
                    <div class="nav-link-container text-start">
                        <a class="nav-link" href="">Home </a>
                        <a class="nav-link bg-light" style="color:#BB2A33;" href="/anggotaProfil">Profil</a>
                        <a class="nav-link" href="/pengajuan">Pengajuan Modal</a>
                        <a class="nav-link" href="/angsuran">Angsuran Pinjaman</a>
                        <a class="nav-link" href="/setor">Setoran Tabungan</a>
                        <a class="nav-link" href="/SHU">Perolehan SHU</a>
                        <a class="nav-link" onclick="logout()" href="/logout">LOGOUT</a>

                    </div>
                </nav>
            </div>
            <div class="konten">
                <h4 class="mb-2 mt-3"><b>Profil </b></h4>
                <div class="informasi ps-4 pt-3">
                    <div class="row">
                        <div class="col mt-1">
                            <img src="{{asset('images/logo.jpg')}}" alt="" style="width:110px; border:2px solid #000; border-radius:50%;">
                        </div>
                        <div class="col mt-3" style="margin-left: -600px; font-size:21px;">
                            <h3>{{ Auth::user()->name }}</h3>
                            {{ Auth::user()->level }}
                        </div>
                    </div>
                    <a class="btn" href="/editAnggota">Edit <img src="{{asset('images/pen.png')}}" style="width: 20px;" alt=""></a>
                </div>
                <h4 class="mb-2 mt-5"><b>Informasi</b></h4>
                <div class="info ps-4 pt-3">
                    <div class="row">
                        <div class="col w-50 mt-2 mb-2">
                            <h5>Nama</h5>
                            <p>{{ Auth::user()->name }}</p>
                        </div>
                        <div class="col mt-2">
                            <h5>Email</h5>
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w-50 mt-2 mb-2">
                            <h5>Posisi</h5>
                            <p>{{ Auth::user()->level }}</p>
                        </div>
                        <div class="col mt-2">
                            <h5>No Telp</h5>
                            <p>{{ Auth::user()->no_telp }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col w-50 mt-2 mb-2">
                            <h5>Alamat</h5>
                            <p>{{ Auth::user()->alamat }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HoA3ecikpr8ZPqFi/WtTfj1GYrV6iYGRfyxlN1E+3pjU0hC2rJ3neF6CDuF+/AN7" crossorigin="anonymous">
        </script>

<script>
    function logout(){
        var result = confirm('Apakah anda yakin ingin logout?');
        if (result == false){
        event.preventDefault();
        }
    }
</script>

</body>

</html>