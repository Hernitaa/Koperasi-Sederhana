<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('register.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Register</title>
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
          <a class="nav-link active" aria-current="page" href="#">LOGIN</a>
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

    <div class="log px-3 py-3">
        <h2 class="text-center">REGISTER</h2>
        <form action="/create" method="POST">
            @csrf
            <div class="field mb-4">
            <input type="name" value="{{ Session::get('name')}}" name="name" placeholder="   Nama" required autocomplete="off">
            </div>
            <div class="field mb-4">
            <input type="email" value="{{ Session::get('email')}}" name="email" placeholder="   Email" required autocomplete="off">
            </div>
            <div class="field mb-4">
            <input type="password" name="password" id="password" placeholder="   Password" required>
            <div id="toggle" onclick="showHide();"></div> 
            </div>
            <center>
                <div class="mb-3">
                    <button onclick="register()" type="submit" name="submit" class="btn rounded-5 w-50" style="background-color: #97BE5A;">Register</button>
                </div>
                <span class="account">Allready have an account?</span><a href="/">Sign in</a>
            </center>
        </form>
    </div>

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
      function register(){
          var result = confirm('Apakah data yang anda isi sudah benar?');
          if (result == false){
          event.preventDefault();
          }
      }
  </script>

</body>
</html>