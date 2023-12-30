<?php
include('banco.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$add = "INSERT INTO autor (nome,email,senha) VALUES ('".$nome ."','".$email."','".$senha."')";
$resultado = mysqli_query($bd, $add) or die(mysqli_error($db));
?>

<script>
	alert("Adicionado com sucesso");
	window.location = "index.html";
</script>
