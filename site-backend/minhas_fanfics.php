<?php
include('banco.php');
if(isset($_POST['senha']) && isset($_POST['email']))
{
	$senhaPOST = $_POST['senha'];
	$emailPOST = $_POST['email'];
	$find_autor = "SELECT * FROM autor WHERE email='".$emailPOST."' and senha='".$senhaPOST . "'";
}
else if(isset($_GET['id']))
{
	$find_autor = "SELECT * FROM autor WHERE id =".$_GET['id'];
}
else
{
	die("Erro no login");
}

	$resultado_find_autor = mysqli_query($bd, $find_autor) or die(mysqli_error($bd));
	while( $registro = mysqli_fetch_assoc($resultado_find_autor))
	{
		$id = $registro['id'];
		$nome = $registro['nome'];
		$email = $registro['email'];
		$senha = $registro['senha'];
	}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store Website</title>
    <link rel="stylesheet" href="css/minhasfanfics.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section>

        <nav>

            <div class="logo">
                <img src="image/logo.png">
            </div>

            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">Sobre Nós</a></li>
                <li><a href="#Featured">Categorias</a></li>
                <li><a href="#Arrivals">Comunidade</a></li>
                <li><a href="#Reviews">Autores</a></li>
            </ul>

            <div class="social_icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
            </div>

        </nav>

      <section id="afastamento">
<?php
$find_fanfics = "SELECT * FROM fanfics WHERE id_autor = " . $id;
$resultado =  mysqli_query($bd, $find_fanfics) or die(mysqli_error($bd));
?>
<?php
echo "<h1>Minhas Fanfics   <button id='but'><a href='cadastrar_fanfic.php?id=".$id."'>Criar Nova</a></button></h1>";
?>
       

        <div >
          
	  <div class="fics">
	<?php
while ($fanfic = mysqli_fetch_assoc($resultado) )
{
	echo "<p class='p'>".$fanfic['titulo']."</p>";
        echo "<div class='divCRUD'>";
        echo "<a href='ver_fanfic.php?id=".$fanfic['id']."' class='CRUD'><img src='image/ver.png'>";
        echo "<p>Ver</p>";
        echo "   </a>";
        echo "    </div>";
  
        echo "  <div class='divCRUD'>";
        echo "   <a href='editar_fanfic.php?id=".$fanfic['id']."&id_autor=".$id."' class='CRUD'><img src='image/criar.png'>";
        echo " <p>Editar</p>";
        echo " </a>";
        echo " </div>";
  
	echo "      <div class='divCRUD'>";
        echo "    <a href='apagar_fanfic.php?id=".$fanfic['id']."&id_autor=".$id."' class='CRUD'><img src='image/excluir.png'>";
        echo "        <p>Excluir</p>";
        echo "      </a>";
        echo "    </div>";	

	
}
?>

           
          </div>
  
           
            
          

        </div>
      
      </section>

      </section>






</body>
</html>
