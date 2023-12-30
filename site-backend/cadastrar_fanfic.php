<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor de Fanfic</title>
    <link rel="stylesheet" href="css/criarfanfic.css">
</head>
<body>

    <header>
        <h1>Criar Fanfic</h1>
    </header>
<form method="POST" action="cadastrar_fanfic_post.php">
    <div class="container">

      <label for="conteudo">Titulo da Fanfic:</label>
      <input type="text" name="titulo">
        <label for="conteudo">Conteúdo da Fanfic:</label>
        <textarea id="conteudo" name="texto" placeholder="Digite o conteúdo da Fanfic" rows="10" required></textarea>

	<input name='id_autor' hidden value='1'/>
<?php
					echo "<input name='id_autor' hidden value='". $_GET['id'] . "'/>";
?>
        <button onclick="salvarLivro()">Cadastrar Fanfic</button>
    </div>

<button>
					<?php echo "<a  class='BtPadraoAnima' href='minhas_fanfics.php?id=".$_GET['id']."'>Voltar</a>"; ?>
                </button>
</form>
</body>
</html>
