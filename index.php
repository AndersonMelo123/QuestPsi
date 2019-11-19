<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Import -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

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

    #direita {
      position: absolute;
      top: 0.2%;
      right: 3%;
    }
  </style>

  <script type="text/jscript">
    function goLogin() {
      window.location = "login.php"
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

            <div class="card-stacked #fec826">
              <div class="card-action center-align">
              </div>

              <div id="direita">
                <button class="btn waves-effect teal lighten-1" onClick="goLogin()" style='font-size:16px'><i class='far fa-user-circle'></i></button>

              </div>

              <div class="icon-block">
                <img class="responsive-img" src="img/logo2.png" width="400">
              </div>

              <!--<h4 class="black-text">QUESTIONÁRIO PSICOLÓGICO</h4>-->

              <p class="flow-text">Este questionário possui um caráter exclusivo de orientação, ele não substitui um diagnóstico feito por um especialista na área da saúde mental.</p>

              <br>

              <p>De acordo com os sentimentos e situações vivenciadas por você nos últimos 30 dias, responda o questionário abaixo:</p>
              <br>
              <div class="card-content card-action left-align white black-text">
                <!-- -->
                <div id="contact">
                  <form class="col s12" action="cadastro.php" method="post">

                    <h5>1. Sinto-me triste.</h5>
                    <p>
                      <label>
                        <input name="group1" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group1" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group1" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group1" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group1" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>

                    <br>
                    <h5>2. Sinto-me motivado a fazer as coisas com prazer.</h5>
                    <p>
                      <label>
                        <input name="group2" value="0" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group2" value="0" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group2" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group2" value="1" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group2" value="1" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>3. Tenho interesse em atividades de lazer e hobbies.</h5>
                    <p>
                      <label>
                        <input name="group3" value="0" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group3" value="0" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group3" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group3" value="1" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group3" value="1" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>4. Não faço mais planos para o futuro</h5>
                    <p>
                      <label>
                        <input name="group4" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group4" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group4" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group4" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group4" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>5. Sou um fracasso.</h5>
                    <p>
                      <label>
                        <input name="group5" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group5" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group5" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group5" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group5" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>6. Eu me sinto constantemente incapaz de fazer as coisas.</h5>
                    <p>
                      <label>
                        <input name="group6" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group6" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group6" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group6" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group6" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>7. Isolo-me do convívio com os meus amigos e familiares.</h5>
                    <p>
                      <label>
                        <input name="group7" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group7" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group7" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group7" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group7" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>8. Sinto-me sem esperança sobre o futuro.</h5>
                    <p>
                      <label>
                        <input name="group8" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group8" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group8" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group8" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group8" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>9. Choro com frequência e sem motivo aparente.</h5>
                    <p>
                      <label>
                        <input name="group9" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group9" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group9" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group9" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group9" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>10. Sinto-me motivado(a) a viver.</h5>
                    <p>
                      <label>
                        <input name="group10" value="0" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group10" value="0" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group10" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group10" value="1" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group10" value="1" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>11. Sinto-me sem valor.</h5>
                    <p>
                      <label>
                        <input name="group11" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group11" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group11" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group11" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group11" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>12. Sinto-me cansado(a) sem motivo aparente.</h5>
                    <p>
                      <label>
                        <input name="group12" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group12" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group12" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group12" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group12" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>13. Sinto-me satisfeito com o meu sono.</h5>
                    <p>
                      <label>
                        <input name="group13" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group13" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group13" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group13" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group13" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>14. Sinto-me irritado sem motivo aparente.</h5>
                    <p>
                      <label>
                        <input name="group14" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group14" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group14" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group14" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group14" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>15. Tive dificuldade em respirar sem motivo aparente (ex. respiração ofegante, falta de ar, etc.).</h5>
                    <p>
                      <label>
                        <input name="group15" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group15" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group15" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group15" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group15" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>16. Sinto meu coração acelerar sem causa aparente.</h5>
                    <p>
                      <label>
                        <input name="group16" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group16" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group16" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group16" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group16" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <!--<h5>17. Sinto meu coração bater mais forte sem causa aparente.</h5>
                    <p>
                      <label>
                        <input name="group17" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group17" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group17" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group17" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group17" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>-->
                    <h5>17. Acho que vou sofrer uma parada cardíaca e não haverá alguém para me socorrer.</h5>
                    <p>
                      <label>
                        <input name="group17" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group17" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group17" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group17" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group17" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>18. Tive tremores involuntários nas mãos ou nas pernas.</h5>
                    <p>
                      <label>
                        <input name="group18" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group18" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group18" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group18" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group18" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>19. Sinto com frequência a sensação de que algo ruim está para acontecer.</h5>
                    <p>
                      <label>
                        <input name="group19" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group19" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group19" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group19" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group19" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <h5>20. Tenho falta de apetite ou apetite demais.</h5>
                    <p>
                      <label>
                        <input name="group20" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group20" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group20" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group20" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group20" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>
                    <!--<h5>22. Em alguns momentos chego a sentir falta de ar.</h5>
                    <p>
                      <label>
                        <input name="group22" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group22" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group22" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group22" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group22" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>-->
                    <h5>21. Perdi/ganhei peso sem motivo aparente:</h5>
                    <p>
                      <label>
                        <input name="group21" value="1" type="radio" required />
                        <span class="black-text">Perdi Peso</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group21" value="1" type="radio" required />
                        <span class="black-text">Ganhei peso</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group21" value="0" type="radio" required />
                        <span class="black-text">Mantive o peso</span>
                      </label>
                    </p>
                    <br>

                    <h5>22. Tenho interesse por atividades sexuais.</h5>
                    <p>
                      <label>
                        <input name="group22" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group22" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group22" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group22" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group22" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>23. Sinto-me com dificuldade de concentração para realizar tarefas cotidianas.</h5>
                    <p>
                      <label>
                        <input name="group23" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group23" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group23" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group23" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group23" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>24. Sinto-me insatisfeito com minha vida de modo geral.</h5>
                    <p>
                      <label>
                        <input name="group24" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group24" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group24" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group24" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group24" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>25. Sinto que não gosto de mim ou que falho comigo mesmo ou me desiludo a mim ou à minha família.</h5>
                    <p>
                      <label>
                        <input name="group25" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group25" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group25" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group25" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group25" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>26. Tive ideias de automutilação com objetos perfurocortantes como lâminas, tesouras, agulhas, seringas, pinças, vidros, entre outros, porém não concretizei.</h5>
                    <p>
                      <label>
                        <input name="group26" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group26" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group26" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group26" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group26" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>27. Provoquei autolesão de forma intencional (cortes, queimaduras ou outra forma):</h5>
                    <p>
                      <label>
                        <input name="group27" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group27" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group27" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group27" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group27" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>28. Sou extremamente impulsivo.</h5>
                    <p>
                      <label>
                        <input name="group28" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group28" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group28" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group28" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group28" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>29. Sinto uma espécie de vazio existencial.</h5>
                    <p>
                      <label>
                        <input name="group29" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group29" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group29" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group29" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group29" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>30. Tenho dores persistentes, dores de cabeça, cólicas ou problemas digestivos que não passam mesmo com algum tratamento.</h5>
                    <p>
                      <label>
                        <input name="group30" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group30" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group30" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group30" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group30" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>



                    <h5>31. Sinto-me um pouco emotivo ou sensível demais.</h5>
                    <p>
                      <label>
                        <input name="group31" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group31" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group31" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group31" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group31" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>32. Sinto-me com medo sem motivo aparente</h5>
                    <p>
                      <label>
                        <input name="group32" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group32" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group32" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group32" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group32" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>33. Sinto que faço as coisas com lentidão.</h5>
                    <p>
                      <label>
                        <input name="group33" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group33" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group33" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group33" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group33" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>34. Sinto-me agitado e não paro de me mover.</h5>
                    <p>
                      <label>
                        <input name="group34" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group34" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group34" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group34" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group34" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <h5>35. Tenho descuidado com a minha própria higiene.</h5>
                    <p>
                      <label>
                        <input name="group35" value="1" type="radio" required />
                        <span class="black-text">Concordo Plenamente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group35" value="1" type="radio" required />
                        <span class="black-text">Concordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group35" value="0" type="radio" required />
                        <span class="black-text">Nem Concordo e nem Discordo</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group35" value="0" type="radio" required />
                        <span class="black-text">Discordo Parcialmente</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="group35" value="0" type="radio" required />
                        <span class="black-text">Discordo Plenamente</span>
                      </label>
                    </p>
                    <br>

                    <div class="center">
                      <button class="btn waves-effect teal darken-3" type="submit">Enviar
                        <i class="material-icons right">send</i>
                      </button>
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