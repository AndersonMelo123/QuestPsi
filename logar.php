<?php

  session_start();
  $conexao = mysqli_connect("127.0.0.1", "root", "", "database");

  if (isset($_POST['login']) && isset($_POST['senha'])) {

    $reclogin = $_POST["login"];
    $recsenha = $_POST["senha"];

    $seleciona = mysqli_query($conexao, "select * from usuario where login='$reclogin' and senha='$recsenha'");
    
    if (mysqli_num_rows($seleciona) > 0){
      $_SESSION['login'] = true;
      header('Location: lista.php');
    }
    /*if($seleciona && mysqli_num_rows($seleciona) == 1){
      
      $_SESSION['login'] = $reclogin;
      $_SESSION['senha'] = $recsenha;
      header("Location: lista.php");
    }else{
      header("Location: index.php");
    }*/
  } 
?>