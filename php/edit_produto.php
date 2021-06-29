<?php
session_start();
include('conexao.php');

$id = $_GET['Id_Produto'];
$produto = mysqli_real_escape_string($conexao ,$_POST['produto']);
$altura = mysqli_real_escape_string($conexao ,$_POST['altura']);
$comprimento = mysqli_real_escape_string($conexao ,$_POST['comprimento']);
$largura = mysqli_real_escape_string($conexao ,$_POST['largura']);
$peso = mysqli_real_escape_string($conexao ,$_POST['peso']);
$recolha = mysqli_real_escape_string($conexao ,$_POST['recolha']);
$entrega = mysqli_real_escape_string($conexao ,$_POST['entrega']);

$sql = "";
if (!empty($_POST['produto'])) {
    if(empty($sql)){
        $sql = "Produto = '$produto'";     
    }
}
if (!empty($_POST['altura'])) {
    if(empty($sql)){
        $sql = "Altura = '$altura'";     
    }else{
        $sql = $sql . ", Altura = '$altura'";
    }
}
if (!empty($_POST['comprimento'])) {
    if(empty($sql)){
        $sql = "Comprimento = '$comprimento'";     
    }else{
        $sql = $sql . ", Comprimento = '$comprimento'";
    }
}
if (!empty($_POST['largura'])) {
    if(empty($sql)){
        $sql = "Largura = '$largura'";     
    }else{
        $sql = $sql . ", Largura = '$largura'";
    }
}
if (!empty($_POST['peso'])) {
    if(empty($sql)){
        $sql = "peso = '$peso'";     
    }else{
        $sql = $sql . ", peso = '$peso'";
    }
}
if (!empty($_POST['recolha'])) {
    if(empty($sql)){
        $sql = "Recolha = '$recolha'";     
    }else{
        $sql = $sql . ", Recolha = '$recolha'";
    }
}
if (!empty($_POST['entrega'])) {
    if(empty($sql)){
        $sql = "Entrega = '$entrega'";     
    }else{
        $sql = $sql . ", Entrega = '$entrega'";
    }
}
if (!empty($sql)) {
    $_Query1 = "UPDATE produtos SET $sql WHERE Id_Produto = '$id'";

        $result = mysqli_query($conexao, $_Query1);

        if ($result == true) {
            echo("Dados Alterados com susseco");
            header("location: detalhes.php?Id_Produto=$id");
            
        }else{
            echo("Erro na alteraçao de dados volte para <a href='detalhes.php?Id_Produto=$id'>tras</a>");
        }
    exit();
}else {
    echo('Nao existe esse parametros de alteração');
}