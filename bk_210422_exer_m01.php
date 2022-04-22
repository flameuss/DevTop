<?php
session_start();
include('verifica_login.php');
include('conexao.php');

// ADicionar no array os dados que serão exibidos no HTML
$arr = array();
$arrQuestoes = array();

// Ínicio Query Alternativas
try {
  $query = "SELECT QE.ID, AL.descricao as alt_descricao, AL.id_questao as alt_id_questao, AL.id_respostas as alt_id_respostas FROM alternativas AL, questoes QE WHERE AL.id_questao = QE.ID  ";
  $stmt = mysqli_query($conn, $query);
  if ($stmt->num_rows > 0) {
    while ($rs = $stmt->fetch_assoc()) {
      $arrQuestoes[] = array(
        "alternativas"      => $rs['alt_descricao'],
        "resposta"          => $rs['alt_id_respostas'],
        "questao"           => $rs['alt_id_questao'],
      );
    }
  } else {
    echo "Erro";
  }
} catch (mysqli_sql_exception $e) {
  echo "Erro: " . $erro->getMessage();
}
// Fim Query Alternativas

// Ínicio Query Questões
try {
  $query = "SELECT MO.ID, MO.descricao as modulo_descricao, QE.ID as id_questao, QE.descricao as descricao_questao, RE.id_resposta FROM modulos MO, questoes QE, respostas RE WHERE MO.ID = QE.id_modulo AND QE.res_correta = RE.id_resposta  ";
  $stmt = mysqli_query($conn, $query);
  if ($stmt->num_rows > 0) {
    while ($rs = $stmt->fetch_assoc()) {
      $arr[] = array(
        "resposta"          => $rs['id_resposta'],
        "id_questao"        => $rs['id_questao'],
        "descricao_questao" => $rs['descricao_questao'],
        "modulo"            => $rs['modulo_descricao'],
      );
    }
  } else {
    echo "Erro";
  }
} catch (mysqli_sql_exception $e) {
  echo "Erro: " . $erro->getMessage();
}
// Final Query Questões
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="./img/dt.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./styles/theme.css">
  <!-- <link rel="stylesheet" type="text/css" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css"> -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    .hidden {
      display: none
    }
  </style>
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
          <li class="nav-item bg-secondary text-white"><a class="nav-link text-white" href="#"></a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style="">
          <div class="card mb-5">
            <div class="card-body">
              <h5 class="card-title"><u><b>Algoritmos<br></b></u>
                Um algoritmo é formalmente uma sequência finita de passos que levam a execução de uma tarefa. Podemos pensar em algoritmo como uma receita, uma sequência de instruções que dão cabo de uma meta específica. Estas tarefas não podem ser redundantes nem subjetivas na sua definição, devem ser claras e precisas.
                Até mesmo as coisas mais simples Por exemplo:

                <br><br><b><u> Podem ser descritas por sequências lógicas</u></b>:<br>“Chupar uma bala”<br />
                • Pegar a bala
                • Retirar o papel
                • Chupar a bala
                • Jogar o papel no lixo
              </h5>
              <a href="#" class="btn btn-secondary text-light">Mostrar Dicas</a>
            </div>
          </div>
        </div>


        <form action="" method="post"></form>
        <?php
        // FIXME -> Primeiro Loop para obter as questões
        $count = -1;
        foreach ($arr as $reg) {
          $count++;
        ?>
          <div class="col-md-6 hidden" id="card_<?php echo $count ?>" style="">
            <!-- Ínicio do Card Que vai ser modificado -->
            <span class="hidden data_atual">#card_<?php echo $count ?></span>
            <div class="card mb-5">
              <div class="card-header" contenteditable="true">Questão <?php echo $reg['id_questao'] ?></div>
              <div class="card-body">
                <p><b><?php echo  $reg['descricao_questao'] ?>.</b></p>
                <br><br>
                <footer class="blockquote-footer">
                  <!-- <b>agora responda quais elementos não se encaixariam nessa sequencia:</b><br><br> -->
                </footer>

                <?php
                // FIXME -> Segundo Loop para obter as alternativas
                foreach ($arrQuestoes as $regAlt) {
                  // FIXME -> Verificando se o ID da questão (vinculada a alternativa) é igual a da questão exibida atualmente
                  if ($reg['id_questao'] == $regAlt['questao']) {
                    echo " <div class='form-check form-check-inline'><input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio1' value='option1'>";
                    echo "<label class='form-check-label' for='inlineRadio1'>";
                    echo $regAlt['alternativas'];
                    echo "</label></div>";
                  }
                }
                ?>
                <br><br> <button type="button" id="btn-confirmar" class="btn text-white btn-secondary">Confirmar</button>
                </blockquote>
              </div>
            </div>
            <!-- Final do Card Que vai ser modificado -->
          </div>
        <?php } ?>
        </form>
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
  <!-- Ínicio do Alert -->
  <script>
    // Swal.fire({
    //   icon: 'success',
    //   title: 'Oops...',
    //   text: 'Sucesso!',
    //   footer: '<a href="">Why do I have this issue?</a>'
    // })

    const valor_id = $(".data_atual").html()
        console.log(valor_id)
    $(valor_id).removeClass("hidden")

    $("#btn-confirmar").click(function() {
      const novo_valor_anterior = modify_card_previous(valor_id)
      const novo_valor_seguinte = modify_card_next(valor_id)

      $(novo_valor_anterior).addClass("hidden")
      $(novo_valor_seguinte).removeClass("hidden")
    })

    function modify_card_previous(valor_id) {
      const novo_valor = valor_id.split("#card_");
      if (parseInt(novo_valor[1]) <= 0) {
        return valor_id
      } else {
        const data_anterior = "#card_" + (parseInt(novo_valor[1]) - 1)
        return data_anterior
      }
    }

    function modify_card_next(valor_id) {
      const novo_valor = valor_id.split("#card_");
      const data_seguinte = "#card_" + (parseInt(novo_valor[1]) + 1)
      return data_seguinte
    }
  </script>
  <!-- Final do Alert -->
</body>

</html>