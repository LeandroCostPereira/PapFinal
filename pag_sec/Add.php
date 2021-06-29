<?php
  session_start();
  include('../php/conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link rel="shortcut icon" type="image/x.png" href="../Imagens/Background-Recuperado.png"/>
    <link rel="stylesheet" href="../css/Style.css">
    <style>
        .fomr{
            left: 20%;
        }
    </style>
</head>
<body>
<div class="fomr">
    <form action="../php/adicionar.php" method="POST" enctype="multipart/form-data">
     
        <p>->Nome do produto: </p>
        <input type="text" name="produto" id="" placeholder="Nome do produto"><br>
        <p>->Categoria:</p>
        <select name="" id="">
            <option value="">Selecione</option>
            <?php
            $sql = "SELECT * FROM `categorias`";

            $result = mysqli_query($conexao, $sql);

            while($row = mysqli_fetch_assoc($result)){?>
                <option value="<?php echo($row['Id_Categoria'])?>"><?php echo($row['TipoCarga'])?></option><?php
            }
            ?>
            <option value="" id="mu">Outro</option>
            <!--<input type="text" name="" id="mo" placeholder="Outra categoria:">-->
        </select><br>
        <p>->Altura </p>
        <input type="text" name="altuta" id="" placeholder="Altura"><br>
        <p>->Comprimento</p>
        <input type="text" name="comprimento" id=""placeholder="Comprimento"><br>
        <p>->Largura </p>
        <input type="text" name="largura" id=""placeholder="Largura"><br>
        <p>->Volume</p>
        <input type="text" name="volume" id=""placeholder="Voluma"><br>
        <p> ->Peso </p>
        <input type="text" name="peso" id=""placeholder="Peso"><br>
        <p> ->Pais/Local->entrega</p>
        <input type="text" name="entrega" id=""placeholder="Entraga"><br>
        ->Pais/Local->recolha <br>
        <input type="text" name="recolha" id=""placeholder="Recolha"><br>
        ->Descriçao:<br>
        <textarea name="descri" id="" cols="30" rows="10" placeholder="Descriçao do produto"></textarea><br>
        ->Carregar Imagens:<br>
        <input type="file" name="Fotos" id="foto" multiple><br>
        <input type="submit" value="Submeter o Produto">
   
    </form>  
</div>
</body>
</html>