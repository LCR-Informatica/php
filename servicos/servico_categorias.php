<?php

function defineCategoriaCompetidor(string $nome, string $idade): ?string
{
  $categorias = ['infantil', 'adolecente', 'adulto'];
  if (validaNome($nome) and validaIdade($idade)) {
    removeMsgError();
    removeMsgSuccess();
    $msg = "O nadador $nome";
    $msg2 = ", compete na categoria ";
    if ($idade > 5 and $idade < 13) {
      $msg .= $msg2 . $categorias[0];
    } elseif ($idade > 12 and $idade < 18) {
      $msg .= $msg2 . $categorias[1];
    } elseif ($idade > 18) {
      $msg .= $msg2 . $categorias[2];
    } else {
      $msg .= " não compete.";
    }
    setMsgSuccess($msg);
    return NULL;
  }
  return getMsgError();
}
