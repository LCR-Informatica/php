<?php
    session_start();
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
            <?php 
                $msg_erro = isset($_SESSION['msg_erro']) ? $_SESSION['msg_erro'] : "";
                $msg_sucesso = isset($_SESSION['msg_sucesso']) ? $_SESSION['msg_sucesso'] : "";
                if(!empty($msg_erro)) {
                    echo "<p>$msg_erro</p>";
                } 
                if(!empty($msg_sucesso)){
                    echo "<p>$msg_sucesso</p>";
                }
            ?>
            <p><input type="submit" value="Enviar"></p>
        </form>
    </div>
</body>

</html>