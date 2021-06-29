<?php
include('../php/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leilao</title>
    <link rel="shortcut icon" type="image/x.png" href="../Imagens/Background-Recuperado.png"/>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/Style_Colors.css">
    <style>
        .img{
            position: absolute;
            margin-top: 5%;
            margin-left: 10%;
        }
        .direita{
           width: 800px;
           position: absolute;
           margin-left: 10%;
           margin-top: 28%;
        }
        .esquerda{
        
           width: 500px;
           height: 550px;
           position: absolute;
           margin-left: 50%;
           margin-top: 10%;
           border-radius: 10px;
        }
        .descricao{ 
          color: black;
        }
        .lance{
          position:absolute;
          margin-top: 40%;
          margin-left: 10%;
          text-align: center;
          padding: 10px 0px;
        }
        .prefil{
          position: absolute;
          width: 200px;
          margin-top: 60%;
          margin-left: 30%;
          text-align: center;
          background-color: #ffffcc;
          border-radius: 20px;
          padding: 10px 0px;
        }
        .img2{
            border-radius: 50px;
            position: absolute;
            top:-50%;
            left:25%;
        }
        .barra{
            width: 400px;
            text-align: center;
            margin-left: 10%;
        }
        .hora{
            margin-top: -180px;
        }
    </style>
    <script type="text/javascript"> 
        setInterval(function() {
        var Hoje = new Date();
        var Horas = Hoje.getHours();
        if(Horas < 10){
                Horas = "0"+Horas; }
        var Minutos = Hoje.getMinutes();
        if(Minutos < 10){
                Minutos = "0"+Minutos; }
        var Segundos = Hoje.getSeconds();
        if(Segundos < 10){
                Segundos = "0"+Segundos;
        }
        document.getElementById("Clock").innerHTML = Horas+":"+Minutos+":"+Segundos;
        }, 1000);

    </script>
</head>
<?php 
file_get_contents("../INCLUDES/menu3.php");
//Exibir os produtos e criar referencia
$id = @$_GET['Id_Produto'];
$sqlu = "SELECT * FROM `produtos` WHERE Id_Produto='$id';";
$resultado = mysqli_query($conexao, $sqlu);
$row = mysqli_fetch_assoc($resultado);
$id_prod =$row['Id_Utilizador'];
if (empty($refs)) {
    $ref = md5(rand(0, 2000000));
    $sqlo = "INSERT INTO `leilao_ref` (`Id_produto`, `Id_Vendedor`, `referencia`,`Datahora`) 
    VALUES ('$id', '$id_prod','$ref', now())";
    $result = mysqli_query($conexao, $sqlo);
}
    $sqli = "SELECT * FROM `leilao_ref` WHERE `Id_produto`='$id';";
    $resultu =mysqli_query($conexao, $sqli);
    $rows = mysqli_fetch_assoc($resultu);
    $refs = $rows['referencia'];

$sql = "SELECT * FROM `produtos` WHERE Id_Produto='$id';";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
$prod = $row['Produto'];
$altu = $row['Altura'];
$comprim = $row['Comprimento'];
$larg = $row['Largura'];
$peso = $row['peso'];
$rec = $row['Recolha'];
$ent = $row['Entrega'];
$img = $row['Imagem'];
$categoria = $row['Id_Categoria'];
$sqli = "SELECT * FROM `categorias` WHERE Id_Categoria = '$categoria';";
$result = mysqli_query($conexao, $sqli);
$row = mysqli_fetch_assoc($result);
$cat = @$row['TipoCarga'];
//Guardar a referecia e o valor oferecido
?>
<body>
    <?php echo file_get_contents("../INCLUDES/menu3.php");?>
    <div>
        <img src="../backup/<?php echo $img;?>" alt="Img Bd" width="515px" height="280px" class="img">
        <div class="direita">
            <div class="imgs">
                <img src="../backup/<?php echo $img;?>" alt="Img Bd" width="100px" height="100px">
                <img src="../backup/<?php echo $img;?>" alt="Img Bd" width="100px" height="100px">
                <img src="../backup/<?php echo $img;?>" alt="Img Bd" width="100px" height="100px">
                <img src="../backup/<?php echo $img;?>" alt="Img Bd" width="100px" height="100px">
                <img src="../backup/<?php echo $img;?>" alt="Img Bd" width="100px" height="100px">
            </div>
            <div class="descricao"><br>
                <h5><strong>Ref leilao:</strong></h5><?php echo($refs);?>
                <h5><strong>Categoria:</strong></h5><?php echo($cat);?><br>
                <div>
                    <h5><strong>Descrição:</strong></h5>
                    <br><h5>Produto:</h5><?php echo($prod);?>
                    <h5>Altura:</h5><?php echo($altu);?>
                    <h5>Comprimento:</h5><?php echo($comprim);?>
                    <div class="quebra">
                        <h5>Largura:</h5><?php echo($larg);?>
                        <h5>Peso:</h5><?php echo($peso);?>
                        <h5>Recolha:</h5><?php echo($rec);?>
                        <h5>Entrega:</h5><?php echo($ent);?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <?php
        if (empty($_POST['valor'])) {
            $valor = 0;
        }else {
            $valor = $_POST['valor'];
        }
        ?>
        <div class="esquerda">
            <div class="lance">
                <h1 class="hora" id="Clock"></h1>
                <h4><strong>Valor Inicial:</strong><?php echo($valor);?>€</h4>
                <h4><strong>Data final:</strong></h4>
                <form action="../php/Leilao.php?Ref=<?php echo $ref;?>" method="post">
                <input type="text" name="valor" id="" placeholder="Valor:"><br><br>
                <input type="submit" value="Licitar"></form>
                <hr class="barra">
                <a href=""><p>Iniciar/Registar</p></a>
            </div>
        
            <div class="prefil"> 
               <img src="../backup/bmw.jpg" alt="bmw" width="100px" height="100px" class="img2"><br>   
                <p><strong>Nome:</strong>Leandro Pereira</p><br>
                <p><strong>Contacto:</strong>917 777 666</p><br>
                <p>Vendedor</p><br>
            </div>
        </div>
    </div>
    
</body>
</html>

