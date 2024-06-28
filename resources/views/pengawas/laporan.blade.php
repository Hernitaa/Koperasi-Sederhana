<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengawas | Laporan</title>
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
            height: 200px;
        }

        .Modal {
            border-top: 3px solid rgb(200, 200, 200);
            background-color: #F4EFEF;
            width: 900px;
            height: 155px;
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
                        <a class="nav-link" href="/dashboardPengawas">Home </a>
                        <a class="nav-link" href="/RUID">RUID Pengurus</a>
                        <a class="nav-link bg-light" style="color:#BB2A33;" href="/laporan">Laporan Keuangan</a>
                        <a class="nav-link" href="/perubahan">Perubahan Modal</a>
                        <a class="nav-link" onclick="logout()" href="/logout">LOGOUT</a>

                    </div>
                </nav>
            </div>
            <div class="konten">
            <h4 class="mb-2 mt-3"><b>Profil Dewan Pengawas</b></h4>
                <div class="informasi ps-4 pt-3">
                    <h4>Informasi</h4>
                    <div class="col mt-3" style="font-size:21px;">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td> : &emsp;</td>
                            <td>{{ Auth::user()->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No. Telp &emsp;</td>
                            <td> : </td>
                            <td>{{ Auth::user()->no_telp }}</td>
                        </tr>
                    </table>
                    </div>
                </div>                
                <h5 class="mb-2 mt-5"><b>Laporan Keuangan </b></h5>
                <div class="Modal ps-4 pt-3">
                    <table>
                        <tr>
                            <td>Laporan Keuangan &emsp;</td>
                            <td><input type="text" placeholder="Masukkan disini"></td>
                        </tr>
                        <tr>
                            <td>Edit Laporan</td>
                            <td><input type="text" placeholder="Masukkan disini"></td>
                        </tr>
                        <tr>
                            <td>Unduh Laporan &emsp;</td>
                            <td><input type="text" placeholder="Masukkan disini"></td>
                        </tr>
                    </table>
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