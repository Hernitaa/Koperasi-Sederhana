<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengurus | Anggota Baru</title>
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

        .info {
            border-top: 3px solid rgb(200, 200, 200);
            background-color: #F4EFEF;
            width: 900px;
            height: 555px;
            margin-top: 10px;
        }

        input {
            background-color: #A48282;
            color: #000;
            width: 550px;
            font-size: 20px;
            border-radius: 5px;
            border: none;
        }

        .btn{
            position: relative;
            width: 100px;
            height: 40px;
            margin-top: 5px;
            margin-left: 10px;
            background-color: #97BE5A;
            border-radius: 25px;
            font-weight: bold;
        }

        .btn:hover{
            background-color: #5f7e2d;
        }

        #toggle {
            position: absolute;
            top: 348px;
            transform: translateY(-50%);
            right: 650px;
            background: url('/images/open.png');
            background-size: cover;
            width: 25px;
            height: 25px;
            cursor: pointer;
        }

        #toggle.hide {
            background: url('/images/lock.png');
            background-size: cover;
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
                        <a class="nav-link" href="/profilPengurus">Profil</a>
                        <a class="nav-link bg-light" style="color:#BB2A33;" href="/anggotaBaru">Anggota Baru</a>
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
                <h4>Tambah Anggota Baru</h4>
                <div class="info pt-3 ps-4">
                    <form action="/createAnggota" method="POST">
                        @csrf
                        <div class="field mb-4">
                        <label for="name">Nama</label><br>
                        <input type="text" value="{{ Session::get('name')}}" name="name" placeholder="   Masukkan nama anda di sini" required autocomplete="off">
                        </div>
                        <div class="field mb-4">
                        <label for="posisi">Posisi</label><br>
                        <input type="text" name="level" placeholder="   Masukkan email anda di sini" required autocomplete="off">
                        </div>
                        <div class="field mb-4">
                        <label for="email">Email</label><br>
                        <input type="email" value="{{ Session::get('email')}}" name="email" placeholder="   Masukkan email anda di sini" required autocomplete="off">
                        </div>
                        <div class="field mb-4">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="password" placeholder="   Masukkan password anda di sini" required>
                        <div id="toggle" onclick="showHide();"></div> 
                        </div>
                        <div class="field mb-4">
                        <label for="alamat">Alamat</label><br>
                        <input type="text" name="alamat" placeholder="   Masukkan alamat anda di sini" required autocomplete="off">
                        </div>
                        <div class="field mb-4">
                        <label for="no_telp">No Telepon</label><br>
                        <input type="text" name="no_telp" placeholder="   Masukkan no telepon anda di sini" required autocomplete="off">
                        </div>
                        <center>
                            <div class="row">
                                <button type="submit" name="submit" class="btn">Simpan</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HoA3ecikpr8ZPqFi/WtTfj1GYrV6iYGRfyxlN1E+3pjU0hC2rJ3neF6CDuF+/AN7" crossorigin="anonymous">
        </script>

<script>
    let password = document.getElementById('password');
    let togglePassword = document.getElementById('toggle');

    function showHide(){
        if(password.type === 'password'){
        password.setAttribute('type', 'text');
        togglePassword.classList.add('hide');
        }else{
        password.setAttribute('type', 'password');
        togglePassword.classList.remove('hide');
        }
    }
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