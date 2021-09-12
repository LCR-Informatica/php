<?php
session_start();

function setMsgError(string $msg): void
{
  $_SESSION['msg_error'] = $msg;
}

function getMsgError(): ?string
{
  if (isset($_SESSION['msg_error'])) {
    return $_SESSION['msg_error'];
  }
  return NULL;
}

function setMsgSuccess(string $msg): void
{
  $_SESSION['msg_success'] = $msg;
}

function getMsgSuccess(): ?string
{
  if (isset($_SESSION['msg_success'])) {
    return $_SESSION['msg_success'];
  }
  return NULL;
}

function removeMsgError(): void
{
  if (isset($_SESSION['msg_error'])) {
    unset($_SESSION['msg_error']);
  }
}

function removeMsgSuccess(): void
{
  if (isset($_SESSION['msg_success'])) {
    unset($_SESSION['msg_success']);
  }
}
