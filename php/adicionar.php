<?php
include('conexao.php');
session_start();

$extensao = strtolower(substr($_FILES['Fotos']['name'], -4));
$novonome = md5(time()).$extensao;
$pasta = "../backup/";

move_uploaded_file($_FILES['Fotos']['tmp_name'], $pasta.$novonome);

$id_categoria = 1;
$id_vendedor = $_SESSION['id'];
$nomeproduro = mysqli_real_escape_string($conexao, trim($_POST['produto']));
$altura = mysqli_real_escape_string($conexao, trim($_POST['altuta']));
$compri= mysqli_real_escape_string($conexao, trim($_POST['comprimento']));
$lagura= mysqli_real_escape_string($conexao, trim($_POST['largura']));
$peso= mysqli_real_escape_string($conexao, trim($_POST['peso']));
$entrega= mysqli_real_escape_string($conexao, trim($_POST['entrega']));
$recolha= mysqli_real_escape_string($conexao, trim($_POST['recolha']));
$imagem= mysqli_real_escape_string($conexao, trim($_FILES['Fotos']['name']));

if(empty($_POST['produto']) || empty($_POST['altuta']) || empty($_POST['comprimento']) || empty($_POST['largura']) || empty($_POST['peso']) || empty($_POST['entrega']) || empty($_POST['recolha']) || empty($_FILES['Fotos']['name'])){
    header('location: ../index.html');
    exit();
}

$sql = "INSERT INTO `produtos`(`Id_Categoria`, `Id_Utilizador`, `Produto`, `Altura`, `Comprimento`, `Largura`, `peso`, `Entrega`, `Recolha`, `Imagem`) VALUES ('$id_categoria','$id_vendedor','$nomeproduro','$altura','$compri','$lagura','$peso','$entrega','$recolha','$novonome')";

if ($conexao->query($sql) === true) {
   header('location: ../pag_Sec/Perfil_Vendedor.php');
}else{
   header('location: ../pag_Sec/Add.php');
}

?>