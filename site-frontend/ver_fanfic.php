<?php
include('banco.php');
$id_noticia=$_GET['id'];
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
        <h1>Minhas Fanfics       </h1>
               

        <div >
          
          <div class="fics">
<?php
$find_fic = "SELECT * FROM fanfics WHERE id = " . $id_noticia;
$fic = mysqli_query($bd, $find_fic) or die(mysqli_error($bd));
while($registro = mysqli_fetch_assoc($fic))
{
	$find_autor = "SELECT nome FROM autor WHERE id = " . $registro['id_autor'];
	$autor = mysqli_query($bd, $find_autor) or die(mysqli_error($bd));
	$autor2 = mysqli_fetch_assoc($autor);
	echo "<div class='divCRUD'><h1>" . $registro['titulo'] . "</h1> <span>Autor: " . $autor2['nome'] . "</span><br/></div>";
	
	echo "<div class='bloco'><hr/><p>" . $registro['texto'] . "</p><hr/><div class='bot'><button><a  class='divCRUD' href='/'>Voltar</a></button></div></div>";
	
} 
?>


             
          </div>
  
           
            
          

        </div>
      
      </section>

      </section>






</body>
</html>
