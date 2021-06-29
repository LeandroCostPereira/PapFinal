<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/Style_Colors.css" type="text/css">
    <title>Registo</title>
    <link rel="shortcut icon" type="image/x.png" href="../Imagens/Background-Recuperado.png"/>
</head>
<body>
<?php
session_start();
if(@$_SESSION['usuario_exite']){
    "<div>
        <p>O utilizador ja existe</p>
    </div>";
}
unset($_SESSION['usuario_exite']);

if (@$_SESSION['campos_vazios']){
    "<div>
        <p>Faltam campos por preencher!</p>
    </div>";
}
unset($_SESSION['campos_vazios']);
 
if(@$_SESSION['cadastro_efetuado']){
    "<div>
        <p>O registo foi feito com susseso!Inicia a sessão carregando <a href='../iniciar_sessao.html'>aqui!</a></p>
    </div>";
}
unset($_SESSION['cadastro_efetuado']);
?>
<form action="../php/registo2.php" method="POST">
    <div class="resgisto">
        <h1 class="esquecer4">Registo</h1>
        <div class="direita2">
            <p>Primeiro Nome:</p>
            <input type="text" name="primeiro" id="" placeholder="Primeiro Nome"><br><br>
            <p>Ultimo Nome:</p>
            <input type="text" name="ultimo" id="" placeholder="Ultimo Nome"><br><br>
            <p>Nome de Utilizador:</p>
            <input type="text" name="utilizador" id="" placeholder="Nome de Utilizador"><br><br>
            <p>Email:</p>
            <input type="email" name="email" id="" placeholder="Email"><br><br>
            <p>Password:</p>
            <input type="password" name="pass" id="" placeholder="Password"><br><br>
        </div>
        <div class="esquerda2">
            <p>Confime Password:</p>
            <input type="password" name="confpass" id="" placeholder="Confima Password"><br><br>
            <P>Numero de contribuinte</P>
            <input type="text" name="nif" id="" placeholder="Numero de contribuite"><br><br>
            <p>Norada principal:</p>
            <input type="text" name="morada" id="" placeholder="Morada principal"><br><br>
            <p>Codigo Postal:</p>
            <input type="text" name="cp" id="" placeholder="Codigo-Postal"><br><br>
            <p>Numero de Telefone:</p>
            <input type="text" name="ntelemovel" id="" placeholder="Numero de telefone"><br<br> 
        </div>
        <div class="centro2">
            <input type="hidden" name="nivel" value="1">
            <input type="submit" value="Registo"><br><br>
          <a href="Registo.php" class="cor url">Volte para trás</a><br>
        </div>
    </div>
    </form>
</body>
</html>