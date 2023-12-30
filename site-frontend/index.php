<?php
include('banco.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store Website</title>
    <link rel="stylesheet" href="css/style.css">
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

        <div class="main">

            <div class="main_tag">
                <h1>BEM VINDO(A) À<br><span>ICS FICS</span></h1>

                <p>
                  Crie suas histórias originais de ICS (Imaginary Character Stories) aqui e agora, sem interrupções de anúncios indesejados, pois optamos por não aceitar patrocínios para preservar a experiência do usuário. Procuramos acima de tudo garantirmos um ambiente autêntico e dedicado à criatividade.
                </p>
                <a href="http://icsfics.backend.biz" class="main_btn">Cadastre-se/Entre</a>

            </div>

            <div class="main_img">
                <img src="image/table-removebg-preview.png">
            </div>

        </div>

    </section>




    <!--Services-->

    <div class="services">

        <div class="services_box">

            <div class="services_card">
                <i class="fa-solid fa-users"></i>
                <h3>Faça parte da nossa comunidade</h3>
                <p>
                   Venha se aventurar no mundo literário que disponibilizamos para você!
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-user"></i>
                <h3>Seja um Autor</h3>
                <p>
                    Liberte sua criatividade e explore sua imaginação conosco e encante o mundo com suas histórias.
                </p>
            </div>

            <div class="services_card">
                <i class="fa-solid fa-star"></i>
                <h3>Favorite suas histórias</h3>
                <p>
                    Com um único click você pode salvar suas histórias favoritas e adicioná-las em sua lista de leituras.
                </p>
            </div>

            <div class="services_card">
              <i class="fa-solid fa-eye"></i>
                <h3>Ganhe visibilidade!</h3>
                <p>
                    Tenha oportunidade de ter sua história publicada por uma de nossas editoras parceiras! 
                </p>
            </div>

        </div>

    </div>




    <!--About-->

    <div class="about">

        <div class="about_image">
            <img src="image/about.png">
        </div>
        <div class="about_tag">
            <h1>Sobre Nós</h1>
            <p>
              Aqui, você tem a liberdade de dar vida a personagens únicos, explorar tramas envolventes e compartilhar suas narrativas sem preocupações. Nosso compromisso é proporcionar um espaço seguro e inspirador para que escritores e entusiastas de ICS possam se expressar sem interferências indesejadas.

              Ao contrário de plataformas que adotam práticas questionáveis, mantemos a integridade de suas criações, valorizando o esforço e a originalidade de cada autor. Estamos comprometidos em construir uma comunidade autêntica e respeitosa, onde a paixão pela escrita e pela criação de universos fictícios seja verdadeiramente apreciada.

              Junte-se a nós nesta jornada única de contar histórias imaginárias e faça parte de uma comunidade que celebra a autenticidade e a originalidade. Aqui, suas ficções de ICS ganham destaque sem interferências, incentivando o talento individual e reconhecendo a singularidade de cada história. Crie, inspire-se e compartilhe suas histórias sem limites.
            </p>
            <a href="#" class="about_btn">Saiba Mais</a>
        </div>

    </div>


  <div class="featured_boks">

          <h1>Algumas de nossas fanfics que foram publicadas!</h1>

          <div class="featured_book_box">

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_1.jpg">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_2.jpg">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_3.jpg">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_4.jpg">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_5.jpg">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_6.jpg">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_7.png">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_8.png">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_9.jpg">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_10.png">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_11.jpg">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_12.png">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_13.png">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_14.png">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                      
                  </div>               

              </div>

              <div class="featured_book_card">

                  <div class="featurde_book_img">
                      <img src="image/book_15.png">
                  </div>

                  <div class="featurde_book_tag">
                      <h2>Featured Books</h2>
                      <p class="writer">John Deo</p>
                      <div class="categories">Thriller, Horror, Romance</div>
                      
                      
                  </div>               

              </div>



          </div>

      </div>




      <!--FANFICS DO BANCO AQUI-->

      <div class="arrivals">
          <h1>Nossas Fanfics</h1>

          <div class="arrivals_box">
     <?php
         $find_fanfics = "SELECT * FROM fanfics";
         $resultado =  mysqli_query($bd, $find_fanfics) or die(mysqli_error($bd));
         while ($fanfic = mysqli_fetch_assoc($resultado) )
        {
            echo "  <div class='arrivals_card'>";

            echo "  <div class='arrivals_tag'>";
            echo "  <p>".$fanfic['titulo']."</p>";
            echo "  <a href='ver_fanfic.php?id=".$fanfic['id']."' class='arrivals_btn'>Ver Fanfic</a>";
            echo "  </div>";
            echo "  </div>";

 

        
}
?>

            

          </div>

      </div>





      <!--reviews-->

      <div class="reviews">
          <h1>Reviews</h1>

          <div class="review_box">

              <div class="review_card">
                  <i class="fa-solid fa-quote-right"></i>
                  <div class="card_top">
                      <img src="image/review_1.png">
                  </div>
                  <div class="card">
                      <h2>John Deo</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                          distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore, 
                          tenetur itaque nostrum voluptas excepturi aut.
                      </p>
                      <div class="review_icon">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star-half-stroke"></i>
                      </div>
                  </div>
              </div>

              <div class="review_card">
                  <i class="fa-solid fa-quote-right"></i>
                  <div class="card_top">
                      <img src="image/review_2.png">
                  </div>
                  <div class="card">
                      <h2>John Deo</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                          distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore, 
                          tenetur itaque nostrum voluptas excepturi aut.
                      </p>
                      <div class="review_icon">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star-half-stroke"></i>
                      </div>
                  </div>
              </div>

              <div class="review_card">
                  <i class="fa-solid fa-quote-right"></i>
                  <div class="card_top">
                      <img src="image/review_3.png">
                  </div>
                  <div class="card">
                      <h2>John Deo</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                          distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore, 
                          tenetur itaque nostrum voluptas excepturi aut.
                      </p>
                      <div class="review_icon">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star-half-stroke"></i>
                      </div>
                  </div>
              </div>

              <div class="review_card">
                  <i class="fa-solid fa-quote-right"></i>
                  <div class="card_top">
                      <img src="image/review_4.png">
                  </div>
                  <div class="card">
                      <h2>John Deo</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eos doloribus iure 
                          distinctio! Eos dolorem quam, nisi amet saepe totam, quas quidem laboriosam dolore, 
                          tenetur itaque nostrum voluptas excepturi aut.
                      </p>
                      <div class="review_icon">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star-half-stroke"></i>
                      </div>
                  </div>
              </div>

          </div>

      </div>

    <!--Banner-->

    <!-- <div class="banner">
        <a href="#" class="banner_btn">Learn More</a>
    </div> -->





    <!--Blog-->

    <div class="blog">
        <h1>Our Blog</h1>
        <div class="blog_box">

            <div class="blog_card">
                <div class="blog_img">
                    <img src="image/blog_1.jpg">
                </div>
                <div class="blog_tag">
                    <h2>Bloger</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quos quis quasi ut 
                        impedit reiciendis voluptatem rem esse ratione omnis, laudantium earum. Aperiam 
                        nesciunt dolore aliquam repellat consequatur amet ducimus.
                    </p>
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

            <div class="blog_card">
                <div class="blog_img">
                    <img src="image/blog_2.jpg">
                </div>
                <div class="blog_tag">
                    <h2>Bloger</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quos quis quasi ut 
                        impedit reiciendis voluptatem rem esse ratione omnis, laudantium earum. Aperiam 
                        nesciunt dolore aliquam repellat consequatur amet ducimus.
                    </p>
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

            <div class="blog_card">
                <div class="blog_img">
                    <img src="image/blog_3.jpg">
                </div>
                <div class="blog_tag">
                    <h2>Bloger</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, quos quis quasi ut 
                        impedit reiciendis voluptatem rem esse ratione omnis, laudantium earum. Aperiam 
                        nesciunt dolore aliquam repellat consequatur amet ducimus.
                    </p>
                    <div class="blog_icon">
                        <i class="fa-solid fa-calendar-days"></i>
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="tag">
                <img src="image/logo.png">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quaerat ipsa aspernatur ad 
                    sequi, dolore eveniet vitae quasi. Excepturi ipsa odio impedit sequi at hic velit, minus 
                    vero sint. Voluptas?
                </p>

            </div>

            <div class="tag">
                <h1>Quick Link</h1>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Featured</a>
                <a href="#">Arrivals</a>
                <a href="#">Reviews</a>
                <a href="#">Blog</a>

            </div>

            <div class="tag">
                <h1>Contact Info</h1>
                <a href="#"><i class="fa-solid fa-phone"></i>+94 12 345 6789</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+94 32 444 699</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>bookstore123@gmail.com</a>

            </div>

            <div class="tag">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>

            </div>

            <div class="tag">
                <h1>Newsletter</h1>
                <div class="search_bar">
                    <input type="text" placeholder="You email id here">
                    <button type="submit">Subscribe</button>
                </div>                
            </div>            

        </div>



    </footer>






</body>
</html>



    
</body>
</html>
