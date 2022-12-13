<?php
    include_once 'config.php';

    $data_cardapio = isset($_POST['data_cardapio']) == true ? $_POST['data_cardapio']:"";
    $salada = isset($_POST['salada']) == true ? $_POST['salada']:"";
    $proteina = isset($_POST['proteina']) == true ? $_POST['proteina']:"";
    $guarnicao = isset($_POST['guarnicao']) == true ? $_POST['guarnicao']:"";
    $sobremesa = isset($_POST['sobremesa']) == true ? $_POST['sobremesa']:"";
    $bebida = isset($_POST['bebida']) == true ? $_POST['bebida']:"";


    $insert = "INSERT INTO tb_cardapios (data_cardapio, salada, proteina, guarnicao, sobremesa, bebida) 
               values ('$data_cardapio', '$salada', '$proteina', '$guarnicao', '$sobremesa', '$bebida')";

    if ($connect->query($insert) == TRUE){
        header('Location: index.php?page=redirect');
    } else echo "Error: insert.php" . $insert. "<br>".$connect->error;

    if(mysqli_affected_rows($connect) > 0){
        header("location: index.php?page=redirect");
    }

    $connect->close();