<?php
    $conexao = mysqli_connect("127.0.0.1", "root", "", "database");

    if (!$conexao) {
      //echo "Error: Unable to connect to MySQL." . PHP_EOL;
      //echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      //echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }
  
  //echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
  //echo "Host information: " . mysqli_get_host_info($conexao) . PHP_EOL;
  
  

if (isset($_POST['resultado']) && isset($_POST['idade']) && isset($_POST['cidade']) && isset($_POST['curso'])) {

  $resultado = (int) $_POST['resultado'];
  $recnome = $_POST["curso"];
  $recidade = (int) $_POST["idade"];
  $reccidade = $_POST["cidade"];
  
  mysqli_query($conexao, "insert into aluno (curso, idade, cidade, pontos) values ('$recnome', '$recidade', '$reccidade', '$resultado')");

  mysqli_close($conexao);
} else {
  header("Location: index.php");
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
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- // -->
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

    span{
        font-weight: bold;
    }
  </style>

<script type="text/jscript">
    function back() {
      window.location = "index.php"
    }
  </script>
</head>


<body>
  <main>
    <br>
    <br>

    <div class="container">
      <div class="row center">
        <div class="container hoverable">
          <div class="card horizontal">
            <div class="card-image large">
              <ul>
                <li>
            </div>
            <div class="card-stacked #fec826">
              <div class="card-action center-align">
              </div>

              <div class="icon-block">
                <img class="responsive-img" src="img/logo_res.png" width="450">
              </div>

              <h5><?php

                  if ($resultado < 6) {
                    //echo "$resultado";
                    echo '<p>

                Segundo a análise das suas respostas, aparentemente está tudo bem com você!
                <br>
                <br>
                Contudo, se esse tema lhe suscita dúvidas ou se conhece alguém que precisa de ajuda, não hesite em consultar um especialista.
                <br>
                <br>
                A universidade possui o Departamento de Qualidade de Vida - DQV, que oferece apoio picológico gratuito. Ligue <span>3320-5468</span> para agendar uma consulta.
                    <br>
                    <br>
                    Se você precisa conversar com alguém imediatamente, entre em contato com o Núcleo de Cuidado Humano da UFRPE. Ligue <span>3320-6640</span> há sempre alguém disponível de segunda a sexta, das 8h às 12h, das 13h às 17h e das 18h às 21h para te ouvir.
                </p>';
                  } else if ($resultado >= 6 && $resultado <= 22) {
                    //echo "$resultado";
                    echo '<p>

                Segundo as suas respostas, aparentemente está tudo bem com você! 
                <br>
                <br>
                Porém se você se sente desconfortável com alguma situação não hesite em consultar um especialista.
                <br>
                <br>
                A universidade possui o Departamento de Qualidade de Vida - DQV, que oferece apoio picológico gratuito. Ligue <span>3320-5468</span> para agendar uma consulta.
                    <br>
                    <br>
                    Se você precisa conversar com alguém imediatamente, entre em contato com o Núcleo de Cuidado Humano da UFRPE. Ligue <span>3320-6640</span> há sempre alguém disponível de segunda a sexta, das 8h às 12h, das 13h às 17h e das 18h às 21h para te ouvir.
                    </p>';
                  } else if ($resultado >= 18 && $resultado <= 27) {
                    //echo "$resultado";
                    echo '<p>

                De acordo com as suas respostas sugerimos que realize uma consulta com um especialista. 
                    <br>
                    <br>
                    A universidade possui o Departamento de Qualidade de Vida - DQV, que oferece apoio picológico gratuito. Ligue <span>3320-5468</span> para agendar uma consulta.
                    <br>
                    <br>
                    Se você precisa conversar com alguém imediatamente, entre em contato com o Núcleo de Cuidado Humano da UFRPE. Ligue <span>3320-6640</span> há sempre alguém disponível de segunda a sexta, das 8h às 12h, das 13h às 17h e das 18h às 21h para te ouvir.
                    </p>';
                  } 
                  ?></h5>
              <br>
              <div class="container center-align">
                <div class="row">
                  <div class="col l12 s12">
                    <br>
                    <h6 class="black-text">Se deseja falar mais a respeito, entre no seguinte grupo:</h6>
                    <br>

                    <!--<a href="#" target="_blank"><i class="fa fa-facebook-square fa-2x  black-text"></i></a>-->

                    &nbsp; &nbsp; &nbsp;

                    <a href="https://chat.whatsapp.com/LT9XC2xDIO0LiN5cWY9yXN"><i class="fa fa-whatsapp" style="font-size:48px;color:green"></i></a>

                    &nbsp; &nbsp; &nbsp;

                    <!--<a href="#"><i class="fa fa-instagram fa-2x  black-text"></i></a>

                    &nbsp; &nbsp; &nbsp;

                    <a href="mailto:#"><i class="fa fa-envelope-square fa-2x  black-text"></i></a>-->

                  </div>
                </div>
              </div>


              <div class="row">
                <button class="btn waves-effect teal darken-3" type="button" onClick=back()>Voltar
                  <i class="material-icons left">navigate_before</i>
                </button>
              </div>

              <div class="card-action center-align">

                &nbsp;&nbsp;&nbsp;<a id="logo-container" class="brand-logo"> <img src="img/logo.png" width="30" alt="logo center-align"></a>

                <a id="logo-container" class="brand-logo"> <img src="img/progepe.png" width="100" alt="logo center-align"></a>

                <a id="logo-container" class="brand-logo"> <img src="img/nucleo_humano.png" width="50" alt="logo center-align"></a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>