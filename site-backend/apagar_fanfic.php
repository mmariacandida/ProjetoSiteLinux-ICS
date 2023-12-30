<?php
include('banco.php');
$id= $_GET['id'];
$id_autor = $_GET['id_autor'];
$del = "DELETE FROM fanfics WHERE id = " . $id ;
$resultado = mysqli_query($bd, $del) or die(mysqli_error($bd));
?>
<script>
	alert("Fanfic removida com sucesso");

	<?php
	echo "window.location='minhas_fanfics.php?id=" . $id_autor ."';"; 
	?>
</script>
