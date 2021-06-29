<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="shortcut icon" type="image/x.png" href="Imagens/Background-Recuperado.png"/>
    <link rel="stylesheet" href="css/Style.css" type="text/css">
    <link rel="stylesheet" href="css/Style_Colors.css" type="text/css">
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
    <?php echo file_get_contents('INCLUDES/menu.php')?>
    <img src="Imagens/Logo_montagem/logo_central/logoCentral.png" alt="logo da empresa TransAuction" class="img11" width="350px" height="350px">
    <!-- Bloco esquerdo Info -->
    <div class="Bloco_esquerdo">
    <p>
        <img src="Imagens/Logo_montagem/Icons 24px/morada.png" alt="">  <strong>Morada</strong><br>
        Rua do gato preto nº4 <br> Zona indusdrial de Porto De Mos <br>
        2104-151 Porto de Mos <br>
        
        <img src="Imagens/Logo_montagem/Icons 24px/telefone.png" alt="">  <strong> Tel:</strong> (+351) 912 365 478 <br>
        <img src="Imagens/Logo_montagem/Icons 24px/fax.png" alt="">  <strong>Fax:</strong>  (+351) 218 304 587 <br>

        <img src="Imagens/Logo_montagem/Icons 24px/email.png" alt="">  <strong>Email:</strong> TransAuction@gmail.com <br>
       <strong>GPS:</strong>
       <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"height":350,"width":350,"zoom":17,"queryString":"Estr. do Areeiro 5, Batalha, Portugal","place_id":"ChIJG-pjSjV1Ig0RBzSFhQJoWTM","satellite":true,"centerCoord":[39.666138, -8.835352],"cid":"0x3359680285853407","lang":"pt","cityUrl":"/portugal/nazare-8453","cityAnchorText":"","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"530350"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=530350';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/pt/map-embed">1 Map</a></div>
    </p>
    <p>
        <strong>Direção Financeira e Administrativa</strong> <br>
        <img src="Imagens/Logo_montagem/Icons 24px/email.png" alt="">  <strong>Email:</strong>DfinanceiraAdministrativa@gmail.com <br>
    </p>
    <p>
        <strong>Recursos Humanos </strong> <br>
        <img src="Imagens/Logo_montagem/Icons 24px/email.png" alt="">  <strong>Email:</strong>RecirsosHumanos@gmail.com <br> 
    </p>
    <p>
        <strong> Garantia de Qualidade</strong> <br>
        <img src="Imagens/Logo_montagem/Icons 24px/email.png" alt="">  <strong> Email:</strong>GarantiaQualidade@gmail.com <br>
    </p>
    <p>
       <strong> Comercial</strong> <br>
       <img src="Imagens/Logo_montagem/Icons 24px/email.png" alt="">  <strong> Email:</strong>Comercial@gmail.com <br>
    </p>
    </div>
    <!-- Fim Bloco esquerdo Info -->

    <!-- Bloco direito form -->
    <div class="Bloco_direito">
    <form action="php/enviar_email.php" method="POST" id="papa">
    <h2>Questões de Duvidas</h2>
        <p>Nome Completo:</p>
        <input type="text" name="nome" id="text" placeholder="Nome Completo"><br>
        <p>Email:</p>
        <input type="email" name="email" id="text" placeholder="Email"><br>
        <p>Assunto:</p>
        <input type="text" name="assunto" id="text" placeholder="Assunto"><br>
        <p>Menssagem:</p>
        <textarea name="msg" id="" cols="30" rows="10">Escreva a sua mensagem:</textarea><br>
        <input type="submit" value="Enviar">
    </form> 
    </div>
    <!-- Fim Bloco direito form -->
    <?php echo file_get_contents('INCLUDES/rodape.php')?>
</body>
</html>