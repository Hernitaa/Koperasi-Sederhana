<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambutan</title>
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
          <a class="nav-link" aria-current="page" href="/login">LOGIN</a>
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
        <div class="container">
            <div class="row">
                <div class="col-sm-5 w-50 mt-3 mb-3">
                    <img class="w-75" src="{{asset('images/mas akbar.jpg')}}" alt="">
                </div>
                <div class="col mt-2">
                    <p>Sambutan Ketua Koperasi
                        <br>
                        <br>
                        Selamat datang di Portal Koperasi Sekolah Dasar Swasta Bina Nusantara!
                        <br>
                        <br>
                        Saya dengan bangga menyambut Anda di dalam komunitas koperasi yang telah menjadi bagian tak terpisahkan dari perjalanan pendidikan di Sekolah Dasar Swasta Bina Nusantara. Koperasi ini bukan hanya sebuah entitas keuangan, tetapi juga merupakan wadah kebersamaan, kerjasama, dan solidaritas di antara kita semua.
                        <br>
                        <br>
                        Sejak berdiri, koperasi kami telah berkomitmen untuk memberikan dukungan yang berarti bagi perkembangan dan keberlangsungan pendidikan di Bina Nusantara. Melalui berbagai inisiatif dan program, kami berusaha untuk menjadi mitra yang handal bagi seluruh anggota komunitas kami.
                        <br>
                        Koperasi kami tidak hanya menawarkan layanan keuangan, tetapi juga menjadi tempat bagi kami untuk saling mendukung dan mempererat hubungan di antara kita. Bersama-sama, kita telah menciptakan banyak momen berharga, merayakan prestasi, dan membangun fondasi untuk masa depan yang lebih baik.
                        <br>
                        <br>
                        Oleh karena itu, mari kita terus bersama-sama, terlibat aktif dalam kegiatan koperasi, dan berbagi semangat untuk memperkuat kesejahteraan bersama. Terima kasih atas dedikasi dan partisipasi Anda dalam memajukan koperasi dan sekolah kita.
                        <br>
                        <br>
                        Salam hangat,
                        <br>
                        <br>
                        [Maulana Akbar Wicaksono]
                        Ketua Koperasi
                        Sekolah Dasar Swasta Bina Nusantara</p>
                </div>
            </div>
        </div>

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