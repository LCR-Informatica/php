<?php
$categorias = ['infantil', 'adolecente', 'adulto'];

$nome = $_POST['nome'];
$idade = $_POST['idade'];
if(empty($nome)){
    echo "Nome não pode ser vazio";
    return;
} elseif(strlen($nome) < 3 or strlen($nome) > 25) {
    echo "Nome deve ter no mínimo 3 e não pode ser muito extenso";
    return;
}

if(!is_numeric($idade)){
    echo "Não foi digitado um valor válido";
    return;
}

$msg = "O nadador $nome compete na categoria ";
    echo $msg;
    if($idade > 5 and $idade < 13){
        echo $categorias[0];
    } elseif ($idade > 12 and $idade < 18) {
        echo $categorias[1];
    } elseif ($idade > 18) {
        echo $categorias[2];
    } else {
        echo "sem categoria";
    }
?>