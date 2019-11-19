<?php
    $conexao = mysqli_connect("127.0.0.1", "root", "", "database");

    $recid=$_GET["idexc"];

    mysqli_query($conexao, "delete from aluno where id=$recid");

    mysqli_close($conexao);

    header("location:lista.php");

?>