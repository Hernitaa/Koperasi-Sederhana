<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('login.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Beranda Login</title>
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
      <ul class="navbar-nav ms-auto" style="margin-right:200px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login">LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/home">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PROFIL
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/sambutan">SAMBUTAN KEPALA KOPERASI</a></li>
            <li><a class="dropdown-item" href="/sejarah">SEJARAH KOPERASI, VISI DAN MISI</a></li>
            <li><a class="dropdown-item" href="/struktur">STRUKTUR ORAGNISASI</a></li>
            <li><a class="dropdown-item" href="/fasilitas">FASILITAS</a></li>
            <li><a class="dropdown-item" href="/peta">PETA LOKASI</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center>
    <div id="carouselExampleIndicators" class="carousel slide mt-1" style="width:55%;" data-bs-ride="true">
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
          <img src="{{asset('images/img1.jpg')}}" class="d-block w-100" style="filter:grayscale(1);" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{asset('images/img1.jpg')}}" class="d-block w-100" style="filter:sepia(1);" alt="...">
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

</body>
</html>