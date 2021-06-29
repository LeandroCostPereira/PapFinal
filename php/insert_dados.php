<?php
session_start();
include('conexao.php');


$nif = mysqli_real_escape_string($conexao, $_POST['nif']);
$cp = mysqli_real_escape_string($conexao, $_POST['cp']);
$ntelefone = mysqli_real_escape_string($conexao, $_POST['ntelefone']);
$morada= mysqli_real_escape_string($conexao, $_POST['morada']);
$id = $_SESSION['id'];

if (empty($_POST['check'] != 0)) {
    $sqli = "INSERT INTO `dados_camionista`(`Id_Camionista`, `NIF`, `morada`, `codigoPostal`, `ntelefone`) VALUES ('$id','$nif','$morada','$cp','$ntelefone')";

    $result = mysqli_query($conexao, $sqli);
    $row = mysqli_num_rows($result);

    if($row == 1){
        header("location: ../pag_Sec/perfil2.php");
        $_SESSION['msgs'] =" echo('Dados inseridos com sucesso!')";
        exit();
    }else{
        header("location: ../pag_Sec/perfil2.php");
        $_SESSION['msgs'] =" echo('Erro na inserção de dados!')";
        exit();
    }
}else {
    header("location: ../pag_Sec/perfil2.php");
    $_SESSION['msgs'] =" echo('Marque a caixinha abaixo!')";
    exit();
}
?>