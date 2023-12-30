<?php
include('banco.php');
$titulo = $_POST['titulo']; 
$texto = $_POST['texto'];
$id_autor= $_POST['id_autor'];
$id=$_POST['id'];

$alt = "UPDATE fanfics SET titulo='".$titulo."',texto='".$texto."' WHERE id=".$id;
$resultado = mysqli_query($bd, $alt) or die(mysqli_error($bd));
?>
<script>
	alert("Fanfic alterada com sucesso");
	<?php
	echo "window.location='minhas_fanfics.php?id=" . $id_autor ."';"; 
	?>
</script>
