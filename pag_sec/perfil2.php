<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu perfil</title>
    <link rel="shortcut icon" type="image/x.png" href="../Imagens/Background-Recuperado.png"/>
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/Style_Colors.css">
    <style>
        .hidden{
            display: none;
            position: relative;
            margin-left: 50%;
            margin-top: -22%;
        }

        .fild{
            margin-left: 30%;
            margin-top: 10%;
        }
        .tit{
            position: absolute;
            margin-top: -5%;
            margin-left: 35%;
        }
    </style>
    <script>
   function mostrar(){
       if (document.getElementById('ma').style.display == 'block'){
           document.getElementById('ma').style.display = 'none'; 
       }else{
           document.getElementById('ma').style.display = 'block'
       }
       
   }
   function inserir(){
       if (document.getElementById('me').style.display == 'block'){
           document.getElementById('me').style.display = 'none'; 
       }else{
           document.getElementById('me').style.display = 'block'
       }
       
   }
   function registar(){
       if (document.getElementById('mi').style.display == 'block'){
           document.getElementById('mi').style.display = 'none'; 
       }else{
           document.getElementById('mi').style.display = 'block'
       }
       
   }
   </script>
</head>
<body>
     <?php
      include('../php/conexao.php');
      session_start();
      $nome = $_SESSION['pnomes'];
      $_Query = "SELECT Id_Utilizador FROM `login` WHERE Pnome = '$nome';";
      $result = mysqli_query($conexao, $_Query) ;
      $row = mysqli_fetch_assoc($result);

      $ID_UTILIZADOR = $row['Id_Utilizador'];
      $_SESSION['id'] = $ID_UTILIZADOR; 

      $_Query2 = "SELECT * FROM `login` WHERE Id_Utilizador = '$ID_UTILIZADOR';";
      $result = mysqli_query($conexao, $_Query2) ;
      $row = mysqli_fetch_assoc($result);

      $_Query3 = "SELECT * FROM `dados_camionista` WHERE Id_Camionista='$ID_UTILIZADOR';";
      $resulte = mysqli_query($conexao, $_Query3);
      $rows = mysqli_fetch_assoc($resulte);
     ?>
     <h1 class="tit">Perfil De <?php echo($_SESSION['pnomes'])?></h1>
   <div class="fild">
        <h3>Nome:</h3><?php echo("<h3 class= 'echo'>$row[Pnome]</h3>")?><br>
        <h3>Ultimo nome: <?php echo("<h3 class= 'echo'>$row[Unome]</h3>")?></h3><br>
        <h3>Nome de Usuario: <?php echo ("<h3 class= 'echo'>$row[Utilinome]</h3>")?></h3><br>
        <h3>Email: <?php echo ("<h3 class= 'echo'>$row[Email] </h3>")?></h3><br>

        <h3>NIF:</h3><?php echo("<h3 class= 'echo'>$rows[NIF]</h3>")?><br>
        <h3>Codigo-Postal:</h3><?php echo("<h3 class= 'echo'>$rows[codigoPostal]</h3>")?><br>
        <h3>Morada:</h3><?php echo("<h3 class= 'echo'>$rows[morada]</h3>")?><br>
        <h3>Numero Telefone:</h3><?php echo("<h3 class= 'echo'>$rows[ntelefone]</h3>")?><br> 
        <div class="butty">
                <input type="button" value="editar" onclick="mostrar('ma')"><br><br>
                <input type="button" value="Inserir dados" onclick="inserir('me')"><br><br>
                <input type="button" value="Registar Veiculo" onclick="registar('mi')"><br><br>
        </div>
        <h4><a href="Perfil_Camionista.php" class="cor url">Voltar para trás</a> </h4> 
   </div>
   
    <div id="ma" class="hidden">
       <form action="../php/edit_profile2.php" method="POST">
            <input type="text" name="nome" id="" placeholder="Nome:"><br><br>
            <input type="text" name="ultimo" id="" placeholder="Ultimo nome:"><br><br>
            <input type="text" name="utilizador" id="" placeholder="Nome de Utilizador:"><br><br>
            <input type="text" name="email" id="" placeholder="Email:"><br><br>
            <input type="submit" value="Aplicar">
       </form>
    </div>
    <div id="me" class="hidden">
       <form action="../php/insert_dados.php" method="POST">
            <input type="text" name="nif" id="" placeholder="NIF:"><br><br>
            <input type="text" name="cp" id="" placeholder="Codigo-Postal:"><br><br>
            <input type="text" name="ntelefone" id="" placeholder="Numero Telefone:"><br><br>
            <input type="text" name="morada" id="" placeholder="Morada"><br><br>
            <input type="checkbox" name="check" id="check" value="0"><p for="check">Uma vez enviados, não poderam sofrer alterações,<br> caso contrario terá de enviar um email, para poder <br> serem feitas essas alterações. </p><br><br>
            <input type="submit" value="Aplicar">
       </form>
       
    </div>
    <div id="mi" class="hidden">
       <form action="../php/regiter_veiculo.php" method="POST">
            <input type="text" name="marca" id="" placeholder="Marca:"><br><br>
            <input type="text" name="modelo" id="" placeholder="Modelo:"><br><br>
            <input type="text" name="tipocarga" id="" placeholder="Tipo de carga:"><br><br>
            <input type="text" name="peso" id="" placeholder="Peso:"><br><br>
            <input type="text" name="largura" id="" placeholder="lagura:"><br><br>
            <input type="text" name="superficie" id="" placeholder="superficie:"><br><br>
            <input type="text" name="altura" id="" placeholder="altura:"><br><br>
            <input type="text" name="comprimento" id="" placeholder="comprimento:"><br><br>
            <input type="submit" value="Aplicar">
       </form>
    </div>
</body>
</html>