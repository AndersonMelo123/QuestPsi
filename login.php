<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: lista.php");
  die();
}
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

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <style type="text/css">
    p {
      margin: 3px;
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

    #bt_direita {
      position: relative;
      top: 1.5%;
      left: 33%;
    }

    fieldset {
      margin-left: 150px;
      margin-right: 150px;
      border-color: #26a69a;
      border-radius: 5%;
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
            </div>

            <div class="card-stacked #fec826">
              <div class="card-action center-align">
              </div>

              <div class="icon-block">
                <img class="responsive-img" src="img/logo2.png" width="350">
              </div>

              <br>
              <div class="box-parent-login">
                <div class="well bg-white box-login">

                  <form role="form" action="logar.php" method="post">
                    <fieldset>

                      <div>
                        <p>Usuário:</p>
                        <input class="input" name="login" type="text" aria-label="Usuário" placeholder="Usuário">
                      </div>

                      <div>
                        <p>Senha:</p>
                        <input class="input" name="senha" type="password" aria-label="Senha" placeholder="Senha">
                      </div>

                      <br>
                      <div id="bt_direita">
                        <button class="btn waves-effect teal darken-3" type="submit">Entrar
                          <i class="fa fa-sign-in-alt"></i>
                        </button>

                      </div>



                    </fieldset>
                  </form>
                </div>
              </div>

              <br>
              <br>

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