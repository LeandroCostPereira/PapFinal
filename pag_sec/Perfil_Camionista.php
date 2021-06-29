<?php
session_start();
include('../php/verifica_login.php');
include('../php/conexao.php');
$nome = $_SESSION['pnomes'];
$sql = "SELECT `Id_Utilizador` FROM `login` WHERE `Pnome`='$nome';";
$result = mysqli_query($conexao, $sql);
$row = @mysqli_fetch_assoc($result);
$id = $row['Id_Utilizador'];
$_SESSION['Camionista'] = $id;
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu perfil</title>
    <link rel="shortcut icon" type="image/x.png" href="../Imagens/Background-Recuperado.png"/>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/Style_Colors.css">
</head>
<body>
    <?php echo file_get_contents('../INCLUDES/menu1.php')?>
    <div style="padding-bottom:3%;" id="list">
         <h3 class="" style="position:absolute;">Ola, Camionista <a href="perfil2.php" class="url likj"><?php echo $_SESSION['pnomes']; ?></a></h3>
    </div>
    <hr>
    <h1 style="text-align: center;">Seus produtos favoritos</H1>
    <hr>
    <?php
    $num_prod_pagina = 3;
    $pagina = intval(@$_GET['pagina']);
    $sql1 ="SELECT * FROM trans_auction.favoritos WHERE id_camionista = '$id' LIMIT $pagina,$num_prod_pagina;";
        $resul = mysqli_query($conexao, $sql1);
        if ($nu= mysqli_num_rows($resul)) {
         $num_paginas = $nu / $num_prod_pagina;
            while($row = mysqli_fetch_assoc($resul)){
                $id_prod = $row['Id_produto'];
                $sql2 = "SELECT  * FROM `produtos` WHERE `Id_Produto`='$id_prod'; ";
                $resultado = mysqli_query($conexao, $sql2);
                if ($num = mysqli_num_rows($resultado) != false){
                    while ($roew = mysqli_fetch_assoc($resultado)){ 
                        $categoria = $roew['Id_Categoria'];
                        $produto = $roew['Produto'];
                        $peso = $roew['peso'];
                        $imagem = $roew['Imagem'];
                    ?>
                    <div class="card">
                    <a href="leilao2.php?Id_Produto=<?php echo $roew['Id_Produto'];?>">
                    <img src="../backup/<?php echo $imagem;?>" width="100%">
                    <div class="container">
                        <h1><?php echo($produto)?></h1>
                        <p><?php echo($peso);?></p>
                    </a>
                        <a href="leilao2.php?Id_Produto=<?php echo $roew['Id_Produto'];?>"><button>Oferta</button></a>
                        <a href="Fav.php?Id_Produto=<?php echo $roew['Id_Produto'];?>"><img src="../Imagens/faviritos.png" alt="" width="25px" height="25px" class="img15"></a>
                    </div>
                    </div>
                <?php
                    }
                }
            }
            ?>
            <br>
            <?php 
                $num = 0;
            ?>
            
 <?php };?>
        <div class="centr">
         <ul class="nav">
               <li class="iten"><a href="Perfil_Camionista.php?pagina=0" class="link lonk">Anterior</a></li>
               <?php for ($i=0; $i < @$num_paginas ; $i++) {?> 
               <li class="iten"><a href="Perfil_Camionista.php?pagina=<?php echo $i;?>" class="link lonk"><?php echo ($i+1);?></a></li>
               <?php };?>
               <li class="iten"><a href="Perfil_Camionista.php?pagina=<?php echo @$num_paginas;?>" class="link lonk">Proximo</a></li>
         </ul>
        </div>   
        <?php echo file_get_contents('../INCLUDES/rodape1.php')?>       
</body>
</html>