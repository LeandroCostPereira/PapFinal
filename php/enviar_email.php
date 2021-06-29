<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$ass = $_POST["assunto"];
$mensagem = $_POST["msg"];
?>
<?php
$to = "leandro.pereira242002@gmail.com";
$subject = "$ass";
$mensage = "<strong>Nome:</strong> $nome<br><br><strong>E-mail:</strong>$email<br><br><strong>Assunto:</strong>$ass<br><br><strong>Mensagem:</strong>$mensagem";
$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=iso-8859-1\n";
$header .="From: $email\n";

mail($to, $subject, $mensage, $header);
echo("Email enviado com sucesso!!");
?>