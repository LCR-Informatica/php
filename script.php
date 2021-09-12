<?php

include "servicos/servico_msg_sessao.php";
include "servicos/servico_de_validacao.php";
include "servicos/servico_categorias.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);
header('location: index.php');
