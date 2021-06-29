<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperaçao da Password</title>
    <link rel="shortcut icon" type="image/x.png" href="../Imagens/Background-Recuperado.png"/>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/Style_Colors.css">
</head>
<body>
<?php echo file_get_contents('../INCLUDES/menu4.php')?>
    <div class="esquecer">
        <h3 class="text">Alteração da Password</h3><br>
        <form action="../php/alterar_pass.php" method="post">
            <p class="text">Digite o seu email:</p>
            <input class="text" type="text" name="email" id="" placeholder="Digite o seu email"><br><br>
            <p class="text">Digite a nova password</p>
            <input class="text" type="password" name="nova" id="" placeholder="Digite a nova password"><br><br>
            <p class="text">Confirme a nova password</p>
            <input class="text" type="password" name="nova" id="" placeholder="Confirme a nova password"><br><br>
            <input class="text" type="submit" value="Aterar">
        </form>
        <p class="text"><a href="../iniciar_sessao.php" class="fer">Voltar para trás</a></p>
    </div>
    <?php echo file_get_contents('../INCLUDES/rodape1.php')?>
</body>
</html>