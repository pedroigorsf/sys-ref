<?php
    include_once 'config.php';


    $nome_preparacao = isset($_POST['nome_preparacao']) == true ? $_POST['nome_preparacao']:"";
    $tipo_preparacao = isset($_POST['tipo_preparacao']) == true ? $_POST['tipo_preparacao']:"";


    $insert = "INSERT INTO tb_preparacoes (tipo_preparacao, nome_preparacao) values ('$tipo_preparacao', '$nome_preparacao')";

    if ($connect->query($insert) == TRUE){
        header('Location: index.php?page=redirect');
    } else echo "Error: insert.php" . $insert. "<br>".$connect->error;

    if(mysqli_affected_rows($connect) > 0){
        header("location: index.php?page=redirect");
    }

    $connect->close();