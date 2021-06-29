<?php   
session_start();
include('conexao.php');

$extensao = strtolower(substr($_FILES['foto']['name'], -4));
$novonome = md5(time()).$extensao;
$pasta = "../backup/";

move_uploaded_file($_FILES['foto']['tmp_name'], $pasta.$novonome);

$imagem = mysqli_real_escape_string($conexao, $_FILES['foto']['name']);
$id_vendedor = $_SESSION['id'];
$id_prod = $_GET['Id_Produto'];

$sqli = "INSERT INTO `img_produtos_utilizador`(`Id_produto`, `Id_Utilizador`, `Imagens`) VALUES ('$id_prod','$id_vendedor','$novonome')";

$result = mysqli_query($conexao, $sqli);

$row = mysqli_num_rows($result);

if($row == 1){
    header("location: ../pag_Sec/detalhes.php?Id_Produto=$id_prod");
    $_SESSION['msgs'] =" echo('Imagem inserida com sucesso!')";
    exit();
}else{
    header("location: ../pag_Sec/detalhes.php?Id_Produto=$id_prod");
    $_SESSION['msgs'] =" echo('Erro na inserção de imagem!')";
    exit();
}

?>