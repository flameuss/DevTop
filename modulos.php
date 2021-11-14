<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/4ce1d457b5.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="./img/dt.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./styles/theme.css">
  <link rel="stylesheet" type="text/css" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary" style="">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar12"> <a class="navbar-brand d-none d-md-block" href="index.php">
          <i class="fa d-inline fa-lg fa-circle"></i>
          <b>DevTop</b>
        </a>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item text-white">
            <a class="nav-link text-white" href="./cursos.php">Cursos</a>
          </li>
          <li class="nav-item text-white">
            <a class="nav-link text-white" href="#">Novidades</a>
          </li>
          <li class="nav-item text-white">
            <a class="nav-link text-white" href="#">Ranking</a>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item text-white"> <a class="nav-link text-white" href="logout.php">Logout</a> </li>
          <li class="nav-item bg-secondary text-white"> <a class="nav-link text-white" href="#">Register</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-4">
    <div class="container">
      <h2>Escolha o nódulo que deseja começar ou prosseguir <?php echo $_SESSION['login']; ?>!</h2>
      <div class="row">
        <div class="col-lg-4 p-3 col-md-12">
          <div class="card " style="height: 350px;">
            <div class="card-body p-4">

              <h2><b>Iniciando na Programação:</b></h2><br />
              <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p><br />
              <a class="btn btn-secondary btn-block aling-baseline" href="exer_m01.php">Iniciar aula</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card">
            <div class="card-body p-4">
              <h2><b>Introdução I</b></h2>
              <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6 ">
          <div class="card">
            <div class="card-body p-4">
              <h2><b>Introdução II</b></h2>
              <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card">
            <div class="card-body p-4">
              <h2><b>Introdução III</b></h2>
              <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4" style="">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card">
            <div class="card-body p-4" style="">
              <h2><b>Intermediário&nbsp;I</b></h2>
              <p style="">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card">
            <div class="card-body p-4">
              <h2><b>Intermediário II</b></h2>
              <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card">
            <div class="card-body p-4">
              <h2><b>Intermediário III</b></h2>
              <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4" style="">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card">
            <div class="card-body p-4" style="">
              <h2><b>Avançado I</b></h2>
              <p style="">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card">
            <div class="card-body p-4">
              <h2><b>Avançado II</b></h2>
              <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 p-3 col-md-6">
          <div class="card">
            <div class="card-body p-4">
              <h2><b>Avançado III</b></h2>
              <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</p>
              <i class="fa fa-lock" aria-hidden="true"></i>
              <a>Bloqueado</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark bg-secondary" style="">
    <div class="container justify-content-center"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar3">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3">
        <ul class="navbar-nav" style="">
          <li class="nav-item mx-2 text-light"> <a class="nav-link text-light" href="#">Perguntas Frequentes</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link navbar-brand mr-0 text-primary" href="#">
              <b class="text-light">DevTop</b></a> </li>
          <li class="nav-item mx-2" style=""> <a class="nav-link text-light" href="#">Sobre Nós</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5 text-center" style="">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-4">
          <p class="mb-3 lead"><u>Siga-nos em:</u></p>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-between"> <a href="#">
                <i class="d-block fa fa-twitter text-muted fa-2x"></i>
              </a> <a href="#">
                <i class="d-block fa fa-instagram text-muted fa-2x"></i>
              </a> <a href="#">
                <i class="d-block fa fa-facebook-official text-muted fa-2x"></i>
              </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>