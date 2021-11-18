<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="./img/dt.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./styles/theme.css">
  <link rel="stylesheet" type="text/css" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/4ce1d457b5.js" crossorigin="anonymous"></script>
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
          <li class="nav-item text-white"> <a class="nav-link text-white" href="logout.php">Logout</a></li>
          <li class="nav-item bg-secondary text-white"><a class="nav-link text-white" href="#">Register</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style="">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><u><b>Algoritmos<br></b></u>
                Um algoritmo é formalmente uma sequência finita de passos que levam a execução de uma tarefa. Podemos pensar em algoritmo como uma receita, uma sequência de instruções que dão cabo de uma meta específica. Estas tarefas não podem ser redundantes nem subjetivas na sua definição, devem ser claras e precisas.
                Até mesmo as coisas mais simples Por exemplo:

                <br><br><b><u> Podem ser descritas por sequências lógicas</u></b>:<br>“Chupar uma bala”<br/>
                • Pegar a bala
                • Retirar o papel
                • Chupar a bala
                • Jogar o papel no lixo
              </h5>
              <a href="#" class="btn btn-secondary text-light">Mostrar Dicas</a>
            </div>
          </div>
        </div>
        <div class="col-md-6" style="">
          <div class="card">
            <div class="card-header" contenteditable="true">Exercício 1:</div>
            <div class="card-body" style="">
              <blockquote class="blockquote mb-0" style="">
                <p><b>usando conceitos de sequência lógica decreva a sequencia lógica para tomar banho em um bloco de notas.
                  </b></p>
                <!-- <a class="btn btn-secondary text-light" href="#">Executar código</a> -->
                <br><br>
                <footer class="blockquote-footer"><b>agora responda quais elementos não se encaixariam nessa sequencia:</b><br><br></footer>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1"> abrir o registro</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">tomar água</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1"> se ensaboar</label>
                </div><br>
                <div class="form-check form-check-inline pt-1" style="">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">entrar no chuveiro</label>
                </div>
                <div class="form-check form-check-inline pt-1" style="">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">fechar o registro</label>
                </div>
                <br><br> <button type="button" class="btn text-white btn-secondary">Confirmar</button>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>