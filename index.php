<?php
session_start();
include "servicos/servico_msg_sessao.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <p>FORMULARIO</p>
        <form action="script.php" method="post">
            <p>Seu Nome: <input type="text" name="nome" /> </p>
            <p>Sua Idade: <input type="text" name="idade" /></p>
            <div>
                <?php
                $msg_success = getMsgSuccess();
                echo $msg_success;

                $msg_error = getMsgError();
                echo $msg_error;
                ?>
            </div>
            <p><input type="submit" value="Enviar"></p>
        </form>
    </div>
</body>

</html>