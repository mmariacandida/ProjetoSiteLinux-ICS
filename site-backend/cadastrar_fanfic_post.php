<?php
include('banco.php');
$titulo = $_POST['titulo']; 
$texto = $_POST['texto'];
$id_autor= $_POST['id_autor'];

$add = "INSERT INTO fanfics (titulo, texto, id_autor) VALUES ('" .
	$titulo . "','" . $texto . "'," . $id_autor . ")";
$resultado = mysqli_query($bd, $add) or die(mysqli_error($bd));
?>
<script>
	alert("Fanfic criada com sucesso");
	<?php
	echo "window.location='minhas_fanfics.php?id=" . $id_autor ."';"; 
	?>
</script>
