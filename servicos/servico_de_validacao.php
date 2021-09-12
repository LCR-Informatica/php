<?php

function validaNome(string $nome): bool
{
  if (empty($nome)) {
    setMsgError("Nome não pode ser vazio");
    return false;
  }
  if (strlen($nome) < 3 or strlen($nome) > 25) {
    setMsgError("Nome deve ter no mínimo 3 e não pode ser muito extenso");
    return false;
  }
  return true;
}

function validaIdade(string $idade): bool
{
  if (empty($idade)) {
    setMsgError("Não foi digitado um valor para idade");
    return false;
  }
  if (!is_numeric($idade)) {
    setMsgError("Não foi digitado um valor válido");
    return false;
  }
  return true;
}
