<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leilao</title>
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
  <?php echo file_get_contents('INCLUDES/menu.php')?>
  <img src="Imagens/Logo_montagem/logo_central/logoCentral.png" alt="logo da empresa TransAuction" class="img11" width="350px" height="350px">
  <!-- Fim menu/rodape -->
    <p class="text3">
            Nesta pagina poderá encontrar uma lista de produtos onde são leiloados para se <br>
            poder fazer o transporte dos mesmos. <br>
            Contudo para poder fazer a sua locitação terá de <a href="iniciar_sessao.php" class="cor url">iniciar a sessao</a>.<br>
    </p>
    <p class="text4">Como fonciona? <br> </p>
</body>
</html>