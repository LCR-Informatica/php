<?php

function defineCategoriaCompetidor(string $nome, string $idade): ?string
{
  $categorias = ['infantil', 'adolecente', 'adulto'];
  removeMsgError();
  removeMsgSuccess();
  if (validaNome($nome) and validaIdade($idade)) {
    $msg = "O nadador $nome, ";
    $msg2 = "compete na categoria ";
    if ($idade > 5 and $idade < 13) {
      $msg .= $msg2 . $categorias[0];
    } elseif ($idade > 12 and $idade < 18) {
      $msg .= $msg2 . $categorias[1];
    } elseif ($idade > 17 and $idade < 99) {
      $msg .= $msg2 . $categorias[2];
    } else {
      $msg .= "não compete em nenhuma categoria.";
    }
    setMsgSuccess($msg);
    return NULL;
  }
  return getMsgError();
}
