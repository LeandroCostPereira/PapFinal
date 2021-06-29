<?php
session_start();
include('conexao.php');

$id = $_GET['Id_Produto'];

if (!empty($id)) {
    $sql = "DELETE FROM produtos WHERE `Id_Produto` = '$id';";
    $result = mysqli_query($conexao, $sql);
    if (mysqli_affected_rows($conexao)) {
        $_SESSION['msg'] = "<p style='color:green;'> Produto apagado com sucesso</p>";
        header('location: ../pag_Sec/Perfil_Vendedor.php');
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao apagar o produto</p>";
        header('location: ../pag_Sec/detalhes.php');
    }
}else{
    $_SESSION['msg'] = "<p style='color:green;'>É necessario selecionar um produto que deseje apagar </p>";
        header('location: ../pag_Sec/Perfil_Vendedor.php');
}

?>