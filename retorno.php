<?php
    if(isset($_POST['group1']) && isset($_POST['group2']) && isset($_POST['group3']) && isset($_POST['group4']) && isset($_POST['group5']) && isset($_POST['group6']) && isset($_POST['group7']) && isset($_POST['group8']) && isset($_POST['group9'])){

        $grupo1 = (int) $_POST['group1'];
        $grupo2 = (int) $_POST['group2'];
        $grupo3 = (int) $_POST['group3'];
        $grupo4 = (int) $_POST['group4'];
        $grupo5 = (int) $_POST['group5'];
        $grupo6 = (int) $_POST['group6'];
        $grupo7 = (int) $_POST['group7'];
        $grupo8 = (int) $_POST['group8'];
        $grupo9 = (int) $_POST['group9'];
        $resultado = $grupo1+$grupo2+$grupo3+$grupo4+$grupo5+$grupo6+$grupo7+$grupo8+$grupo9;

    }else{
        header("Location: contato.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<!-- Import -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    
    <!--icones --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- // --> 
<title>Teste Psicológico</title>
<link rel="shortcut icon" type="text/css" href="img/ico.png">
</head>


<header>
    
</header>




<body>
    <main>
    <br>
    <br>
    <div class="row center-align">
            <div class="icon-block">
                <img class="responsive-img" src="img/logopsi.png" width="350">
            </div>
        </div>
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
            
            
            <h5><?php 



            if ($resultado<8) {
                echo "<h4>ESTÁ TUDO BEM!</h4>";
                echo '<p class="flow-text">Segundo a análise das suas respostas, aparentemente não sofre está tudo bem com você. Contudo, se este tema lhe suscita dúvidas ou se apresenta sintomas que lhe causam preocupação, não hesite em consultar um especialista em saúde mental.</p>';
            } else if($resultado>=8 && $resultado<=14){
                echo "<h4>DEPRESSÃO LEVE!</h4>";
                echo '<p class="flow-text">Nas suas respostas identificamos sintomas sugestivos de Depressão Leve. Estes sintomas, se não forem tratados atempadamente, podem evoluir para um estado de depressão mais grave, que é muito mais difícil tratar. Consulte um especialista em saúde mental que irá clarificar o seu quadro clínico e desenhar um plano de intervenção adequado ao seu diagnóstico.</p>';
            } else if($resultado>=15 && $resultado<=20){
                echo "<h4>DEPRESSÃO MODERADA!</h4>";
                echo '<p class="flow-text">Os sintomas que apresenta sugerem um grau de Depressão Moderada. Quanto mais depressa pedir ajuda especializada, mais rápido e eficaz será o tratamento. Não hesite em consultar um especialista em saúde mental que irá diagnosticar com precisão e indicar o tratamento mais adequado ao seu caso clínico.</p>';
            } else {
                echo "<h4>DEPRESSÃO MAIOR!</h4>";
                echo '<p class="flow-text">A análise de suas respostas sugere que você apresenta indícios de sintomas semelhantes à Depressão Maior. No entanto, não se desespere! Informe-se acerca dos equipamentos que disponibilizam atendimentos em saúde mental da sua região para uma avaliação especializada.</p>';
            }
            ?></h5>
            <br> 
            <div class="container center-align">
            <div class="row">
              <div class="col l12 s12">
                <br>
                <h6 class="black-text">Conheça nossas redes sociais:</h6>
                <br>
                  
        <a href="#" target="_blank"><i class="fa fa-facebook-square fa-2x  black-text" ></i></a>
                  
         &nbsp; &nbsp; &nbsp;
                  
        <a href="#"><i class="fa fa-twitter fa-2x  black-text"></i></a>
                  
         &nbsp; &nbsp; &nbsp;
                  
        <a href="#"><i class="fa fa-instagram fa-2x  black-text"></i></a>
                  
        &nbsp; &nbsp; &nbsp;
                  
        <a href="mailto:#"><i class="fa fa-envelope-square fa-2x  black-text"></i></a>      
        
              </div>
            </div>
          </div>

         
       <div class="row">
            <button class="btn waves-effect indigo darken-4" type="button" onClick="history.go(-1)">Voltar
                <i class="material-icons left">navigate_before</i>
            </button>
        </div>

        <div class="card-action center-align">       

        &nbsp;&nbsp;&nbsp;<a id="logo-container" class="brand-logo"> <img src="img/logo.png" width="30"alt="logo center-align" ></a>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>   
    </main>     

