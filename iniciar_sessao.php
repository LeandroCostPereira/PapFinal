<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sessao</title>
  <link rel="shortcut icon" type="image/x.png" href="Imagens/Background-Recuperado.png"/>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
    <link rel="stylesheet" href="css/Style_Colors.css">   
    <link rel="stylesheet" href="css/Style_Media.css">
    <style>
        .img11{
            position: absolute;
            left: 40%;
            top: -9%;
        }
    </style>
</head>
<body>
  <!-- menu/rodape -->
  <?php echo file_get_contents('INCLUDES/rodape.php')?>
  <img src="Imagens/Logo_montagem/logo_central/logoCentral.png" alt="logo da empresa TransAuction" class="img11" width="350px" height="350px">
  <?php echo file_get_contents('INCLUDES/menu.php')?>
  <!-- Fim menu/rodape -->
  <div class="esquecer3">
    <h1>Iniciar Sessão</h1><br>
   <form action="php/login.php" method="post" >
     <input type="text" name="nome" id="" placeholder="Nome de Utilizador"><br><br>
     <input type="password" name="password" id="" placeholder="Password"><br><br>
     <input type="submit" value="Login" class="cor2"><br><br>
     <a href="pag_Sec/Registo.php" class="lonk ">Ainda não tem conta? Crie já!</a><br><br>
     <a href="pag_Sec/Esquecer_password.php" class="lonk ">Esqueci-me da password!</a>
   </form>
  </div>
</body>
</html>