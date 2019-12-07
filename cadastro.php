<?php

if (
  isset($_POST['group1']) && isset($_POST['group2']) && isset($_POST['group3']) && isset($_POST['group4']) && isset($_POST['group5']) && isset($_POST['group6']) && isset($_POST['group7']) && isset($_POST['group8']) && isset($_POST['group9']) && isset($_POST['group10']) && isset($_POST['group11']) && isset($_POST['group12']) && isset($_POST['group13']) && isset($_POST['group14']) && isset($_POST['group15']) && isset($_POST['group16']) && isset($_POST['group17']) && isset($_POST['group18']) && isset($_POST['group19']) && isset($_POST['group20']) && isset($_POST['group21']) && isset($_POST['group22']) && isset($_POST['group23']) && isset($_POST['group24']) && isset($_POST['group25']) && isset($_POST['group26']) && isset($_POST['group27']) && isset($_POST['group28'])
  && isset($_POST['group29']) && isset($_POST['group30']) && isset($_POST['group31']) && isset($_POST['group32']) && isset($_POST['group33']) && isset($_POST['group34']) && isset($_POST['group35'])
) {

  $grupo1 = (int) $_POST['group1'];
  $grupo2 = (int) $_POST['group2'];
  $grupo3 = (int) $_POST['group3'];
  $grupo4 = (int) $_POST['group4'];
  $grupo5 = (int) $_POST['group5'];
  $grupo6 = (int) $_POST['group6'];
  $grupo7 = (int) $_POST['group7'];
  $grupo8 = (int) $_POST['group8'];
  $grupo9 = (int) $_POST['group9'];
  $grupo10 = (int) $_POST['group10'];
  $grupo11 = (int) $_POST['group11'];
  $grupo12 = (int) $_POST['group12'];
  $grupo13 = (int) $_POST['group13'];
  $grupo14 = (int) $_POST['group14'];
  $grupo15 = (int) $_POST['group15'];
  $grupo16 = (int) $_POST['group16'];
  $grupo17 = (int) $_POST['group17'];
  $grupo18 = (int) $_POST['group18'];
  $grupo19 = (int) $_POST['group19'];
  $grupo20 = (int) $_POST['group20'];
  $grupo21 = (int) $_POST['group21'];
  $grupo22 = (int) $_POST['group22'];
  $grupo23 = (int) $_POST['group23'];
  $grupo24 = (int) $_POST['group24'];
  $grupo25 = (int) $_POST['group25'];
  $grupo26 = (int) $_POST['group26'];
  $grupo27 = (int) $_POST['group27'];
  $grupo28 = (int) $_POST['group28'];
  $grupo29 = (int) $_POST['group29'];
  $grupo30 = (int) $_POST['group30'];
  $grupo31 = (int) $_POST['group31'];
  $grupo32 = (int) $_POST['group32'];
  $grupo33 = (int) $_POST['group33'];
  $grupo34 = (int) $_POST['group34'];
  $grupo35 = (int) $_POST['group35'];

  $result = $grupo1 + $grupo2 + $grupo3 + $grupo4 + $grupo5 + $grupo6 + $grupo7 + $grupo8 + $grupo9 + $grupo10 + $grupo11 + $grupo12 + $grupo13 + $grupo14 + $grupo15 + $grupo16 + $grupo17 + $grupo18 + $grupo19 + $grupo20 + $grupo21 + $grupo22 + $grupo23 + $grupo24 + $grupo25 + $grupo26 + $grupo27 + $grupo28 + $grupo29 + $grupo30 + $grupo31 + $grupo32 + $grupo33 + $grupo34 + $grupo35;
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
  <title>Questionário Psicológico</title>
  <link rel="shortcut icon" type="text/css" href="img/ico.png">

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
  </style>

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

            <div class="card-stacked #fec826">
              <div class="card-action center-align">
              </div>

              <div class="icon-block">
                <img class="responsive-img" src="img/logo2.png" width="350">
              </div>

              <!--<h4 class="black-text">QUESTIONÁRIO PSICOLÓGICO</h4>-->

              <p>Suas respostas permanecerão anônimas, mas é importante sabermos um pouco
                mais sobre você.
              </p>

              <br>
              <div class="card-content card-action left-align white black-text">
                <!-- -->
                <div id="contact">
                  <form class="col s12" action="retorno.php" method="post">

                    <input type="hidden" value="<?php echo $result ?>" name="resultado" />

                    <div class="col s12">
                      <div class="col s08">
                        <p>Em qual curso da UFRPE você está matriculado?</p>
                        <input type="text" name="curso" placeholder="Curso" required class="input" />
                      </div>
                    </div>


                    <div class="col s12">
                      <div class="col s08">
                        <br>
                        <p>Qual a sua idade?</p>
                        <input type="number" name="idade" min="1" max="112" placeholder="Somente números" require class="input">
                      </div>
                    </div>

                    <div class="col s12">
                      <div class="col s08">
                        <br>
                        <p>Qual a sua cidade natal?</p>
                        <input type="text" name="cidade" placeholder="Cidade" required class="input" />
                      </div>
                    </div>

                    <div class="col s12">
                      <div class="center">
                        <br>
                        <br>
                        <button class="btn waves-effect teal darken-3" type="submit">Ver resultado
                          <i class="material-icons right">send</i>
                        </button>
                      </div>
                    </div>


                  </form>
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
</html>