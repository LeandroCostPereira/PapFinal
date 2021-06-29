<?php
 session_start();
 include('conexao.php');
 $email = mysqli_real_escape_string($conexao, $_POST['email']); 
 $nova = mysqli_real_escape_string($conexao, $_POST['nova']);

 $query = "SELECT Id_vendedor FROM `login` WHERE `email` = '$email';";

 $result = mysqli_query($conexao, $query);

 $row = mysqli_fetch_assoc($result);
 
 $id=$row['Id_Utilizador'];

 $sql = "UPDATE `login` SET `password` = MD5('$nova') WHERE Id_vendedor = ('$id');";
 
 $result = mysqli_query($conexao, $sql);

 if ($result == true) {
      echo("<script>alert('A sua palavra pass foi alterada!!');</script>");
      header('location: ../iniciar_sessao.html');
 }else{
    echo "Error updating record: " . mysqli_error($conexao);

  }

?>