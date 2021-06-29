<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos em LeiLão</title>
    <link rel="shortcut icon" type="image/x.png" href="../Imagens/Background-Recuperado.png"/>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/Style_Colors.css">
</head>
<body>
    <div class="menu">
        <ul id="list">
            <li class="item"><a href="../index.html" class="link">Inicio</a></li>
            <li class="item"><a href="../quem_somos.html" class="link">Quem somos</a></li>
            <li class="item"><a href="../contacto.html" class="link">Contactos</a></li>
            <li class="item"><a href="perfil_Vendedor.php" class="link">Perfil</a></li>
        </ul>
        <img src="../Imagens/nome.png" alt="logo da empresa TransAuction" class="img1">
    </div>
    <div class="wrap">
    <?php 
        include('../php/conexao.php');
        $sql = "SELECT * FROM produtos;";
        
        $rest = mysqli_query($conexao, $sql);
       
        if (mysqli_num_rows($rest) != false){
            while ($row = mysqli_fetch_assoc($rest)){ 
                $produto = $row['Produto'];
                $peso =$row['peso'];
                $imagem = $row['Imagem'];?>
        <div class="card">
            <a href="leilao2.php?Id_Produto=<?php echo $row['Id_Produto'];?>">
            <img src="../backup/<?php echo $imagem;?>" width="100%">
            <div class="container">
                <h1><?php echo($produto)?></h1>
                <p><?php echo($peso)?></p>
            </a>
                <a href="leilao2.php?Id_Produto=<?php echo $row['Id_Produto'];?>"><button>Oferta</button></a>
                <a href="Fav.php?Id_Produto=<?php echo $row['Id_Produto'];?>"><img src="../Imagens/faviritos.png" alt="" width="25px" height="25px" class="img15"></a>
            </div>
        </div>
        <?php
            }
        }else{
            echo("<h3 class = 'texto4'>Nenhum Produto!</h3>");
        }
        ?>
        
    </div>
    
</body>
</html>