<?php
session_start();
include('../php/conexao.php');
$id = $_GET['Id_Produto'];
$sql = "DELETE FROM trans_auction.favoritos WHERE `Id` = '$id';";
$result = mysqli_query($conexao, $sql);
$rows = mysqli_affected_rows($conexao);
if ($rows == True) {
    header("location: fav.php");
    exit();
}
?>