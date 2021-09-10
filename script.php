<?php

session_start();

$categorias = ['infantil', 'adolecente', 'adulto'];

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['msg_erro'] = "Nome não pode ser vazio";
    header("location: index.php");
    return;
} elseif(strlen($nome) < 3 or strlen($nome) > 25) {
    $_SESSION['msg_erro'] = "Nome deve ter no mínimo 3 e não pode ser muito extenso";
    header("location: index.php");
    return;
} elseif(!is_numeric($idade)){
    $_SESSION['msg_erro'] = "Não foi digitado um valor válido";
    header("location: index.php");
    return;
}

    $msg = "O nadador $nome ";
    echo $msg;
    if($idade > 5 and $idade < 13){
        $msg.= "compete na categoria $categorias[0]";
    } elseif ($idade > 12 and $idade < 18) {
        $msg.= "compete na categoria $categorias[1]";
    } elseif ($idade > 18) {
        $msg.= "compete na categoria $categorias[2]";
    } else {
        $msg.= "não compete.";
    }
    $_SESSION['msg_sucesso'] = $msg;
    header("location: index.php");
    return;
?>