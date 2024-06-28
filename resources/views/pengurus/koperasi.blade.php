<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengurus | Koperasi</title>
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
            width: 920px;
            height: 495px;
            margin-top: 10px;
        }

        input {
            background-color: #A48282;
            color: #000;
            width: 550px;
            border-radius: 5px;
            border: none;
        }
        .btn{
            width: 100px;
            height: 40px;
            margin-top: 15px;
            margin-left: 400px;
            background-color: #97BE5A;
            border-radius: 25px;
            font-weight: bold;
        }

        .btn:hover{
            background-color: #5f7e2d;
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
                        <a class="nav-link" href="/anggotaBaru">Anggota Baru</a>
                        <a class="nav-link" href="/transaksi">Transaksi Keuangan</a>
                        <a class="nav-link" href="/agenda">Agenda dan Kalender</a>
                        <a class="nav-link" href="/dokumen">Dokumen</a>
                        <a class="nav-link" href="/kegiatan">Kegiatan</a>
                        <a class="nav-link bg-light" style="color:#BB2A33;" href="/koperasi">Koperasi</a>
                        <a class="nav-link" href="/perhitunganSHU">Perhitungan SHU</a>
                        <a class="nav-link" href="/aset">Aset dan Inventaris</a>
                        <a class="nav-link" onclick="logout()" href="/logout">LOGOUT</a>

                    </div>
                </nav>
            </div>
            <div class="konten">
            <h4>Koperasi</h4>
                <div class="info">
                    <div class=" mt-3 mb-3 ms-3">
                        <h5>SEJARAH KOPERASI</h5>
                        <p>Koperasi kami, Bina Nusantara, lahir dari semangat kolaborasi dan kebersamaan di antara para pendiri yang peduli akan kemajuan pendidikan.  Di dirikan pada tahun 2017, koperasi ini memulai perjalanan yang penuh tantangan namun juga penuh prestasi. Dari awalnya sebagai inisiatif kecil untuk mendukung kebutuhan keuangan sekolah, koperasi telah tumbuh menjadi pilar utama dalam mendukung berbagai program dan kegiatan di Sekolah Dasar Swasta Bina Nusantara.</p>
                    </div>
                    <div class="row">
                        <div class="col w-50 mt-3 mb-3 ms-3">
                            <h5>VISI KOPERASI</h5>
                            <p>Kami memiliki visi untuk menjadi pusat keuangan yang terpercaya dan menjadi mitra utama dalam mendukung kemajuan pendidikan di lingkungan Bina Nusantara. Kami berkomitmen untuk terus mengembangkan layanan dan program yang memberikan nilai tambah bagi anggota dan sekolah, serta mendorong kesejahteraan dan keberlanjutan komunitas.</p>
                        </div>
                        <div class="col mt-3">
                            <h5>MISI KOPERASI</h5>
                            <p>Dengan memadukan kearifan lokal dan inovasi modern, kami bertekad untuk menyediakan layanan keuangan yang berkualitas, mempromosikan inklusi keuangan, serta mendukung kegiatan sosial dan pendidikan di sekolah. Melalui pendekatan kolaboratif dan partisipatif, kami berupaya untuk meningkatkan aksesibilitas dan kualitas layanan bagi seluruh anggota koperasi.</p>
                        </div>
                    </div>
                    <center>
                            <div class="row">
                                <button onclick="register()" type="submit" name="submit" class="btn" style="background-color: #97BE5A;">Edit <img src="{{asset('images/pen.png')}}" style="width: 20px;" alt=""></button>
                            </div>
                        </center>
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