<?php
include('banco.php');
$id_fic=$_GET['id'];
$id_autor=$_GET['id_autor'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fanfic</title>
    <link rel="stylesheet" href="css/editarfanfic.css">
</head>
<body>

    <header>
        <h1>Editar Fanfic</h1>
    </header>

    <div class="container"> 
<form method="POST" action="editar_fanfic_post.php">

<?php    
$find_fanfics = "SELECT * FROM fanfics";
$resultado =  mysqli_query($bd, $find_fanfics) or die(mysqli_error($bd));
$resultado2 = mysqli_fetch_assoc($resultado);
$titulo = $resultado2['titulo'];
$texto  = $resultado2['texto'];

echo "<label for='conteudo'>".$titulo.":</label>";

  echo "    <input name='titulo' type='text' value='".$titulo."' >";


  echo "      <label for='conteudo'>Conteúdo da Fanfic:</label>";
  echo "		<textarea id='conteudo' name='texto'   rows='10' required>".$texto."</textarea>";
?>
<?php
                                        echo "<input name='id_autor' hidden value='". $id_autor . "'/>";
?>
<?php
                                        echo "<input name='id' hidden value='". $id_fic . "'/>";
?>
      <div id="display_Button">
        <button onclick="salvarLivro()">Alterar Fanfic</button>
      </div>
    </div>

</body>
</html>
