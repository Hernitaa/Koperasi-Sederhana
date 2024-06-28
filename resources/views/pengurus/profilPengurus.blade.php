<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengurus | Profil</title>
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
                    <img src="{{asset('images/logo.jpg')}}" class="img mb-5 me-4" style="width: 130px; border-radius:50%; margin-top:10px;"
                        alt="">
                    <div class="nav-link-container text-start">
                        <a class="nav-link" href="/dashboardPengurus">Home </a>
                        <a class="nav-link bg-light" style="color:#BB2A33;" href="/profilPengurus">Profil</a>
                        <a class="nav-link" href="/anggotaBaru">Anggota Baru</a>
                        <a class="nav-link" href="/transaksi">Transaksi Keuangan</a>
                        <a class="nav-link" href="/agenda">Agenda dan Kalender</a>
                        <a class="nav-link" href="/dokumen">Dokumen</a>
                        <a class="nav-link" href="/kegiatan">Kegiatan</a>
                        <a class="nav-link" href="/koperasi">Koperasi</a>
                        <a class="nav-link" href="/perhitunganSHU">Perhitungan SHU</a>
                        <a class="nav-link" href="/aset">Aset dan Inventaris</a>
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
                </div>
                <h5 class="mb-2 mt-5"><b>Informasi </b></h5>
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