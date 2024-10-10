<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
serviço de envio de emails)
echo "Obrigado, $nome. Sua mensagem foi recebida.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Contato</title>

<link rel="stylesheet" href="style.css">
</head>
<body>
<section id="contato">
<h2>Entre em Contato</h2>
<form action="contato.php" method="POST">
<label for="nome">Nome:</label>
<input type="text" id="nome" name="nome" required>
<label for="email">Email:</label>
<input type="email" id="email" name="email" required>
<label for="mensagem">Mensagem:</label>
<textarea id="mensagem" name="mensagem"

required></textarea>

<button type="submit">Enviar</button>
</form>
</section>
</body>
</html>