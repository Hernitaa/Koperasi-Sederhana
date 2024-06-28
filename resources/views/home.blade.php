<!DOCTYPE html>
<html lang="en">
<head>
    
<style>
        .page1{
            height: 653px;
        }
        .page2{
            height: 653px;
        }
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #BB2A33;">
  <div class="container-fluid">
    <img src="{{asset('images/logo.jpg')}}" class="img me-4" style="width: 100px; border-radius:50%;" alt="">
    <a class="navbar-brand" href="#" style="font-weight: bold; font-size:25px;">SD BINA BANGSA <br>SURABAYA </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/logout">LOGOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PROFIL
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/sambutan">SAMBUTAN KEPALA KOPERASI</a></li>
            <li><a class="dropdown-item" href="#">SEJARAH KOPERASI, VISI DAN MISI</a></li>
            <li><a class="dropdown-item" href="#">STRUKTUR ORAGNISASI</a></li>
            <li><a class="dropdown-item" href="#">FASILITAS</a></li>
            <li><a class="dropdown-item" href="#">PETA LOKASI</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">KOPERASI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">KEANGGOTAAN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="page1">
  {{ Auth::user()->name }}
    <center>
        <div id="carouselExampleIndicators" class="carousel slide w-50 mt-4" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('images/img1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('images/img2.jpg')}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </center>
</section>
<section id="home" class="page2 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 w-50 ms-5" style="margin-top: 25px;">
                    <h2 style="font-weight: bold; font-size:25px;">SD BINA BANGSA <br>SURABAYA </h2>
                    <p>Sekolah Dasar Swasta Mengedepankan Kenegaraan Berprestasi & Berbudi Pekerti untuk menghantarkan peserta didik yang handal dalam kontribusi kenegaraan, mencetak insan berakhlak mulia dan mencetak lulusan yang mampu berkompetensi secara global dengan didukung oleh program sekolah yang ada.</p>
                    <a class="btn btn-danger px-5" href="">Pendaftaran</a>
                </div>
                <div class="col">
                    <img class="w-100" src="{{asset('images/img2.jpg')}}" alt="">
                </div>
            </div>
        </div>
</section>

<footer style="background-color: #BB2A33;">
    <div class="container pt-3 pb-3">
            <div class="row">
                <div class="col">
                <img src="{{asset('images/logo.jpg')}}" class="img me-4" style="width: 120px; border-radius:50%;" alt="">
                </div>
                <div class="col mt-3">
                    <h5>Today's View : 5</h5>
                    <h5>Today's Visitors : 5</h5>
                    <h5>Total Views : 127</h5>
                </div>
                <div class="col">
                    <h5>HUBUNGI KAMI :</h5>
                    <p>Jl. Semolowaru No.45, Menur <br> Pumpungan, Kec. Sukolilo, <br> Surabaya, Jawa Timur 60118</p>
                </div>
                <div class="col">
                    <h5>MEDIA SOSIAL :</h5>
                    <img src="{{asset('images/wa.png')}}" class="img me-4" style="width: 50px;" alt="">
                    <img src="{{asset('images/ig.png')}}" class="img me-4" style="width: 30px;" alt="">
                    <img src="{{asset('images/yt.png')}}" class="img me-4" style="width: 30px;" alt="">
                </div>
            </div>
        </div>
</footer>

</body>
</html>