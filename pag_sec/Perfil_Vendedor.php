 <?php
    session_start();
    include('../php/conexao.php');
    include('../php/verifica_login2.php');
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
    <?php echo file_get_contents('../INCLUDES/menu2.php')?>
     <img src="../Imagens/nome.png" alt="logo da empresa TransAuction" class="img1">
     <div style="padding-bottom:3%;" id="list">
         <h3 class="" style="position:absolute;">Ola, vendedor <a href="perfil.php" class="url likj"><?php echo $_SESSION['pnome']; ?></a></h3>
     </div>
    <section>
         <hr>
         <h1 class="fer">Seus Produtos</h1>
         <hr>
    </section>
	<?php
        $utlizador = @$_SESSION['pnome'];
        $sqlmy="SELECT * FROM trans_auction.login WHERE Pnome='$utlizador'";
        $reult = mysqli_query($conexao, $sqlmy);
        $row = @mysqli_fetch_assoc($reult);
        $id = $row['Id_Utilizador'];
        $_SESSION['id'] = $id;
        echo(@$_SESSION['msg'] === true);

        $sql = "SELECT `Id_Produto`, `Id_Categoria`, `Id_Utilizador`, `Produto`, `Altura`, `Comprimento`, `Largura`, `peso`, `Entrega`, `Recolha`, `Imagem` FROM `produtos` WHERE Id_Utilizador='$id' ";
            
        $rest = mysqli_query($conexao, $sql);
            
        if (@mysqli_num_rows($rest) == true){ 
            while ($row = mysqli_fetch_assoc($rest)){
                $id_prod = $row['Id_Produto']; 
                $produto = $row['Produto'];
                $categoria = $row['Id_Categoria'];
                $altura = $row['Altura'];
                $comprimento = $row['Comprimento'];
                $largura = $row['Largura'];
                $peso =$row['peso'];
                $recolha =$row['Recolha'];
                $entrega =$row['Entrega'];
                $imagem = $row['Imagem'];

                $_SESSION['Produto'] = $produto;
                $_SESSION['Id_prod'] = $id;

                $sqli = "SELECT  `TipoCarga` FROM `categorias` WHERE Id_Categoria = '$categoria';";
                $restr = mysqli_query($conexao, $sqli);
                $rows = mysqli_fetch_assoc($restr);
                $cat = $rows['TipoCarga'];?>
            <div class="card">
            <a href="detalhes.php?Id_Produto=<?php echo($id_prod);?>" class="cor url">
            <img src="../backup/<?php echo $imagem;?>" width="100%">
            <div class="container vlot">
                <h1><?php echo($produto)?></h1>
                <p><?php echo($peso)?></p>
                <p><?php echo($cat)?></p>
            </a>
             <a href="detalhes.php?Id_Produto=<?php echo($id_prod);?>" class="cor url">Detalhes</a>
            </div>
            </div>
            <?php 
              }
        }else{
             echo("<img src='../Imagens/triste.png' width='20%' class='img9'><br>
                   <h3 class='Text87'>Não tem produtos na sua conta.<br>
                   Vá a adicionar, e preencha os campos referidos.</h3>");
        }   
    ?>
    <?php echo file_get_contents('../INCLUDES/rodape1.php')?>
 </body>
 </html>