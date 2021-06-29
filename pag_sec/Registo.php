<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar</title>
    <link rel="shortcut icon" type="image/x.png" href="../Imagens/Background-Recuperado.png"/>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/Style_Colors.css">

</head>
<body>
    <?php
    if(@$_SESSION['usuario_exite']):
    ?>
    <div>
        <p>O utilizador ja existe</p>
    </div>
    <?php
    endif;
    unset($_SESSION['usuario_exite']);
    ?>
     <?php
     if (@$_SESSION['campos_vazios']):
     ?>
    <div>
        <p>Faltam campos por preencher!</p>
    </div>
    <?php
    endif;
    unset($_SESSION['campos_vazios']);
    ?>
    <?php
    if(@$_SESSION['cadastro_efetuado']):
    ?>
    <div>
        <p>O registo foi feito com susseso!Inicia a sessão carregando <a href="../iniciar_sessao.html">aqui!</a></p>
    </div>
    <?php
    endif;
    unset($_SESSION['cadastro_efetuado']);
    ?>
    <div class="esquecer2">
        <h3>Registo</h3>
    <form action="../php/registo.php" method="POST">
        <p>Primeiro Nome:</p>
        <input type="text" name="primeiro" id="" placeholder="Primeiro Nome"><br>
        <p>Ultimo Nome:</p>
        <input type="text" name="ultimo" id="" placeholder="Ultimo Nome"><br>
        <p>Nome de Utilizador:</p>
        <input type="text" name="utilizador" id="" placeholder="Nome de Utilizador"><br>
        <p>Email:</p>
        <input type="email" name="email" id="" placeholder="Email"><br>
        <p>Password:</p>
        <input type="password" name="pass" id="" placeholder="Password"><br>
        <p>Confirme Password:</p>
        <input type="password" name="confpass" id="" placeholder="Confima Password"><br>
        <input type="hidden" name="nivel" value="0"><br>
        <input type="submit" value="Registo" class="cor2"><br><br>
        <a href="Registo_camionista.php"class="cor url ">Camionistra? Registe-se aqui!</a><br><br>
        <a href="../iniciar_sessao.php" class="cor url ">Volte para trás</a>
    </form>
    </div>
</body>
</html>