<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu perfil</title>
    <link rel="shortcut icon" type="image/x.png" href="../Imagens/Background-Recuperado.png"/>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/Style_Colors.css">
    <script>
        function mostrar(){
       if (document.getElementById('ma').style.display == 'block'){
           document.getElementById('ma').style.display = 'none'; 
       }else{
           document.getElementById('ma').style.display = 'block'
       }
       
   }
    </script>
</head>
<body>
     <?php
      include('../php/conexao.php');
      session_start();
      $nome = $_SESSION['pnome'];

      $_Query = "SELECT Id_Utilizador FROM `login` WHERE Pnome = '$nome';";

      $result = mysqli_query($conexao, $_Query) ;

      $row = mysqli_fetch_assoc($result);

      $ID_UTILIZADOR = $row['Id_Utilizador'];

      $_SESSION['id'] = $ID_UTILIZADOR; 

      $_Query2 = "SELECT * FROM `login` WHERE Id_Utilizador = '$ID_UTILIZADOR';";

      $result = mysqli_query($conexao, $_Query2) ;

      $row = mysqli_fetch_assoc($result);
     ?>
     <h1 class="tit">Perfil De <?php echo($_SESSION['pnome'])?></h1>
   <div class="fild">
     
      
        <h3>Nome:</h3><?php echo("<h3 class= 'echo'>$row[Pnome]</h3>")?><br>
        <h3>Ultimo nome: <?php echo("<h3 class= 'echo'>$row[Unome]</h3>")?></h3><br>
        <h3>Nome de Usuario: <?php echo ("<h3 class= 'echo'>$row[Utilinome]</h3>")?></h3><br>
        <h3>Email: <?php echo ("<h3 class= 'echo'>$row[Email] </h3>")?></h3><br>
        <div class="butty">
            <input type="button" value="Editar" onclick="mostrar('ma')">
        </div>
        <h4><a href="Perfil_Vendedor.php" class="cor url">Voltar para trás</a> </h4>
    
   </div>
    <div id="ma" class="hidden">
       <form action="../php/edit_profile.php" method="POST">
            <input type="text" name="nome" id="" placeholder="Nome:" require><br><br>
            <input type="text" name="ultimo" id="" placeholder="Ultimo nome:"><br><br>
            <input type="text" name="utilizador" id="" placeholder="Nome de Utilizador:"><br><br>
            <input type="text" name="email" id="" placeholder="Email:"><br><br>
            <input type="submit" value="Aplicar">
       </form>
    </div>
    <script src="../js/index.js"></script>
</body>
</html>