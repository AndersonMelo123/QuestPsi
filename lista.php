<?php
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/

 session_start();
 if(!isset ($_SESSION['login']))
 {
   //unset($_SESSION['login']);
   //unset($_SESSION['senha']);
   header('Location: index.php');
   session_destroy();
   }
  
 //$logado = $_SESSION['login'];

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Import -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <!--icones -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Questionário Psicológico</title>
  <link rel="shortcut icon" type="text/css" href="img/ico.png">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">
    p {
      margin: 26px;
      font-size: 14pt;
      text-align: justify;
    }

    h4 {
      font-weight: bold;
    }

    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      background-color: rgba(45, 52, 222, 0.2);
    }

    table {
      border: "1";
    }

    td {
      text-align: center;
    }

    i {
      align-items: center;
    }
    #direita {
      position: absolute;
      top: 1.5%;
      right: 3%;
    }
  </style>

  <script type="text/jscript">
    function verifica(recid) {
      if (confirm("Tem certeza que deseja excluir este valor permanentemente?")) {
        window.location = "excluir.php?idexc=" + recid
      }
    }
    function goHome() {
      window.location = "index.php"
    }

    function exit() {
      window.location = "logout.php"
      
    }
  </script>

</head>
<!-- Conexão -->



<body>
  <main>
    <br>
    <div class="container">
      <div class="row center">
        <div class="container hoverable">
          <div class="card horizontal">
            <div class="card-image large">
              <ul>
                <li>
            </div>

              <div id="direita">
                <button class="btn waves-effect teal lighten-1" type="button" onClick="goHome()">
                  <i class="fa fa-home"></i>
                </button>

                <button class="btn waves-effect teal lighten-1" type="button" onClick="exit()">
                  <i class="fa fa-power-off"></i>
                </button>
              </div>


            <div class="card-stacked #fec826">
              <div class="card-action center-align">
              </div>

              <div class="icon-block">
                <img class="responsive-img" src="img/logo2.png" width="350">
              </div>

              <br>
              <div class="card-content card-action left-align white black-text">
                <!-- -->
                <div id="contact">

                  <table width="100%" bordercolor="#EEE" cellspace="0" cellpading="10">
                    <tr>
                      <td><strong>CURSO</strong></td>
                      <td><strong>IDADE</strong></td>
                      <td><strong>CIDADE</strong></td>
                      <td><strong>PONTOS</strong></td>
                      <td width="10"><strong>EXCLUIR</strong></td>
                    </tr>
                    <?php
                    $conexao = mysqli_connect("127.0.0.1", "root", "", "database");
                    $seleciona = mysqli_query($conexao, "select * from aluno order by id desc");

                    while ($campo = mysqli_fetch_array($seleciona)) { ?>
                      <tr>
                        <td><?= $campo["curso"] ?></td>
                        <td><?= $campo["idade"] ?></td>
                        <td><?= $campo["cidade"] ?></td>
                        <td><?= $campo["pontos"] ?></td>
                        <td><a href="#" onClick="verifica(<?= $campo["id"] ?>)"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php }

                    mysqli_close($conexao); ?>

                  </table>
                </div>
              </div>

             

              <div class="card-action center-align">
                &nbsp;&nbsp;&nbsp;<a id="logo-container" class="brand-logo"> <img src="img/logo.png" width="40" alt="logo center-align"></a>

                <a id="logo-container" class="brand-logo"> <img src="img/progepe.png" width="100" alt="logo center-align"></a>

                <a id="logo-container" class="brand-logo"> <img src="img/nucleo_humano.png" width="50" alt="logo center-align"></a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
</body>