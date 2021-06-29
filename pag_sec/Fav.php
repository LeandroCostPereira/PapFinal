<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favotitos</title>
    <link rel="shortcut icon" type="image/x.png" href="../Imagens/Background-Recuperado.png"/>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/Style_Colors.css">
    <style>
        .box{
        position: absolute;
        background-color:  rgba(204, 252, 252, 0.342);
        height: 50px;
        width: 200px;
        margin-top: 2%;
        margin-left: 5%;
        text-align: center;
        }
    </style>
</head>
<body>
    <div class="box">
        <a href="Perfil_Camionista.php" class="cor url vlot"><h3>Voltar para trás</h3></a>
    </div>
    <div>
        <?php
        include('../php/conexao.php');
        session_start();
        $Idcamionista = $_SESSION['Camionista'];
        $vazio = "";
        if (!empty($_GET['Id_Produto'])) {
            if(empty($vazio)){
                $id = @$_GET['Id_Produto'];
                $sql = "INSERT INTO `favoritos`(`Id_produto`, `id_camionista`) VALUES ('$id','$Idcamionista');";
                $result = mysqli_query($conexao, $sql);     
            }
        }
        $sql1 ="SELECT * FROM `favoritos` WHERE `id_camionista`= '$Idcamionista';";
        $resul = mysqli_query($conexao, $sql1);
        if ($nu= mysqli_num_rows($resul)) {
            while($row = mysqli_fetch_assoc($resul)){
                $id_prod = $row['Id_produto'];
                $sql2 = "SELECT  * FROM `produtos` WHERE `Id_Produto`='$id_prod';";
                $resultado = mysqli_query($conexao, $sql2);
                if ($num = mysqli_num_rows($resultado) != false){
                    while ($roew = mysqli_fetch_assoc($resultado)){ 
                        $categoria = $roew['Id_Categoria'];
                        $produto = $roew['Produto'];
                        $peso = $roew['peso'];
                        $imagem = $roew['Imagem'];
                ?>
                <div class="card">
                    <a href="leilao2.php?Id_Produto=<?php echo $roew['Id_Produto'];?>"></a>
                    <img src="../Imagens/Logo_montagem/Icons 24px/favoritos.png" alt="">
                    <img src="../backup/<?php echo $imagem;?>" width="100%">
                    <div class="container">
                        <h1><?php echo($produto)?></h1>
                        <p><?php echo($peso);?></p>
                        
                    </a>
                        <a href="leilao2.php?Id_Produto=<?php echo $roew['Id_Produto'];?>"><button>Oferta</button></a>
                        <a href="apagar_Fav.php?Id_Produto=<?php echo $roew['Id_Produto'];?>"><button>Apagar</button></a>
                    </div>
                </div>
                <?php
                    }
                }
            }
            
            
        }else{
                    echo("<h3 class = 'texto4'>Nenhum Produto!</h3>");
                }
        ?>
    </div>
</body>
</html>
