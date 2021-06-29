<!doctype html>
<html>
    <head>
	<title>Detalhes</title>
	<link rel="shortcut icon" type="image/x.png" href="../Imagens/Background-Recuperado.png"/>
	<link rel="stylesheet" href="../css/Style.css">
	<link rel="stylesheet" href="../css/Style_Colors.css">
	<script type="text/javascript">
	function editar(){
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
	</script>
	<style>
		.expo{
    position: absolute;
    margin-left: 30%;
    margin-top: 5%;
}
	</style>
	</head>
	<body>
	<div class="expo">
		<?php
		include('../php/conexao.php');
		session_start();

		$prod = $_SESSION['Produto'];
		$id = $_GET['Id_Produto'];

		$sql = "SELECT `Id_Produto`, `Id_Categoria`, `Id_Utilizador`, `Produto`, `Altura`, `Comprimento`, `Largura`, `peso`, `Entrega`, `Recolha`, `Imagem` 
		FROM `produtos` WHERE Id_Produto='$id';";

		$rest = mysqli_query($conexao, $sql);

		$row = mysqli_fetch_assoc($rest);

		
		$produto = $row['Produto'];
        $categoria = $row['Id_Categoria'];
        $altura = $row['Altura'];
        $comprimento = $row['Comprimento'];
    	$largura = $row['Largura'];
		$peso = $row['peso'];
        $recolha = $row['Recolha'];
        $entrega = $row['Entrega'];

        echo(@$_SESSION['msgs'] === TRUE);
		echo ('<h3>Nome do produto:</h3>'.$produto) .'<br>';
		//echo ('<h3>Categoria:</h3>'.'  '.$categoria).'<br>';
		echo ('<h3>Altura:</h3>'.'  '.$altura.' '.'metros').'<br>';
		echo ('<h3>Comprimento:</h3>'.'  '.$comprimento.' '.'metros').'<br>';
		echo ('<h3>Largura:</h3>'.'  '.$largura.' '.'metros').'<br>';
		echo ('<h3>Peso:</h3>'.'  '.$peso.' '.'Kg').'<br>';
		echo ('<h3>Local de Recolha:</h3>'.'  '.$recolha).'<br>';
		echo ('<h3>Local de Entrega:</h3>'.'  '.$entrega).'<br>';
		?>
		<br><br>
		<input type="button" value="Editar" onclick="editar()" ><br><br>
		<input type="button" value="Inseri Imagens" onclick="inserir()"><br><br>
		<a href="../php/eliminar_produto.php?Id_Produto=<?php echo $row['Id_Produto'];?>" class="button cor">eliminar</a><br><br>
		<a href="Perfil_vendedor.php" class="cor url vlot">Voltar para trás</a>
		
	</div>
	<div id="ma" class="hidden1" ><!--Editar-->
       <form action="../php/edit_produto.php?Id_Produto=<?php echo $row['Id_Produto'];?>" method="POST">
            <input type="text" name="produto" id="" placeholder="Produto:" require><br><br>
            <!--<input type="text" name="categoria" id="" placeholder="Categoria:"><br><br>-->
            <input type="text" name="altura" id="" placeholder="Altura:"><br><br>
            <input type="text" name="comprimento" id="" placeholder="Comprimento:"><br><br>
			<input type="text" name="largura" id="" placeholder="Largura:"><br><br>
			<input type="text" name="peso" id="" placeholder="Peso:"><br><br>
			<input type="text" name="recolha" id="" placeholder="Recolha:"><br><br>
			<input type="text" name="entrega" id="" placeholder="Entrega:"><br><br>
            <input type="submit" value="Aplicar">
       </form>
	</div>
	<div id="me" class="hidden3">
		<form action="../php/insert_img.php?Id_Produto=<?php echo $row['Id_Produto'];?>" method="post">
			<p>Insira as imagens uma de cada vez</p>
			<input type="file" name="foto" id=""><br><br>
			<input type="submit" value="Inserir"><br>
    	</form>
	</div>
	</body>
</html>