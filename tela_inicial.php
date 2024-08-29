<?php
    
    require_once "validator.php";

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>


<body>
    <div>
    <img class="logo" src="assets/logo.png" alt="">
    </div>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Olper Motors</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Carros
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Marca</a>
            <a class="dropdown-item" href="#">Modelo</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Filtrar</a>
          </div>

        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" href="http://localhost/xampp/Site_Carro2-main/">Sair</a>
        </li>

      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Procurar..." aria-label="Procurar...">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    
    </div>
  </nav>

  <hr>

  <div class="container">
    <div class="row">

      <div class="col-sm">
        
      </div>

      <div class="col-sm my-carousel">
        <div id="carouselExampleFade" class="carousel slide carousel-fade " data-ride="carousel">

          <div class="carousel-inner">
      
            <div class="carousel-item active foto1">
              <img class="d-block w-100" src="https://thegarage.com.br/wp-content/uploads/2023/03/1992-GM-Opala-Diplomata-SE-automatic-4.1-a-venda-the-garage-34.jpg" alt="Primeiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p>Opala Diplomata 1992</p>
                <a href="https://github.com/LuizWatanabe2005/Site_carro2" type="button" class="btn btn-dark">Visualizar</a>
              </div>
            </div>
      
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <p>Opala Diplomata 1992</p>
                <a href="https://github.com/LuizWatanabe2005/Site_carro2" type="button" class="btn btn-dark">Visualizar</a>
              </div>
              <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2021/06/IMG_7336-1-scaled.jpg?resize=1536%2C1024&ssl=1" alt="Segundo Slide">
            </div>
      
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <p>Opala Diplomata 1992</p>
                <a href="https://github.com/LuizWatanabe2005/Site_carro2" type="button" class="btn btn-dark">Visualizar</a>
              </div>
              <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2021/06/IMG_7364-scaled.jpg?resize=1536%2C1024&ssl=1" alt="Terceiro Slide">
            </div>
      
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <p>Opala Diplomata 1992</p>
                <a href="https://github.com/LuizWatanabe2005/Site_carro2" type="button" class="btn btn-dark">Visualizar</a>
              </div>
              <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2021/06/IMG_7365-scaled.jpg?resize=1536%2C1024&ssl=1" alt="Quarto Slide">
            </div>
      
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <p>Opala Diplomata 1992</p>
                <a href="https://github.com/LuizWatanabe2005/Site_carro2" type="button" class="btn btn-dark">Visualizar</a>
              </div>
              <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2021/06/IMG_7344-scaled.jpg?resize=1536%2C1024&ssl=1" alt="Quarto Slide">
            </div>
      
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <p>Opala Diplomata 1992</p>
                <a href="https://github.com/LuizWatanabe2005/Site_carro2" type="button" class="btn btn-dark">Visualizar</a>
              </div>
              <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2021/06/IMG_7376-scaled.jpg?resize=1536%2C1024&ssl=1" alt="Quinto Slide">
            </div>
      
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <p>Opala Diplomata 1992</p>
                <a href="https://github.com/LuizWatanabe2005/Site_carro2" type="button" class="btn btn-dark">Visualizar</a>
              </div>
              <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2021/06/IMG_7375-scaled.jpg?resize=1536%2C1024&ssl=1" alt="Sexto Slide">
            </div>
      
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <p>Opala Diplomata 1992</p>
                <a href="https://github.com/LuizWatanabe2005/Site_carro2" type="button" class="btn btn-dark">Visualizar</a>
              </div>
              <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2021/06/IMG_7349-scaled.jpg?resize=1536%2C1024&ssl=1" alt="Sétimo Slide">
            </div>
      
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <p>Opala Diplomata 1992</p>
                <a href="https://github.com/LuizWatanabe2005/Site_carro2" type="button" class="btn btn-dark">Visualizar</a>
              </div>
              <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2021/06/IMG_7338-scaled.jpg?resize=1536%2C1024&ssl=1" alt="Oitavo Slide">
            </div>
      
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <p>Opala Diplomata 1992</p>
                <a href="https://github.com/LuizWatanabe2005/Site_carro2" type="button" class="btn btn-dark">Visualizar</a>
              </div>
              <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2021/06/IMG_7366-scaled.jpg?resize=1536%2C1024&ssl=1" alt="Nono Slide">
            </div>
      
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <p>Opala Diplomata 1992</p>
                <a href="https://github.com/LuizWatanabe2005/Site_carro2" type="button" class="btn btn-dark">Visualizar</a>
              </div>
              <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2021/06/IMG_7359-scaled.jpg?resize=1536%2C1024&ssl=1" alt="Décimo Slide">
            </div>
          </div>
        </div>

      <div class="col-sm">
       
      </div>
      
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>

    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
    
  </div>



  <div class="container">
    <div class="row">

        
    
    
    
    
        <!-- Card 1 -->
        <div class="col-sm">
            
          <div class="card" style="width: 18rem;">
              
              <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                    
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                    </ol>
                    
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://i2.wp.com/thegarage.com.br/wp-content/uploads/2023/04/2000-BMW-740IL-a-venda-The-garage-6.jpg?strip=info&w=1500&ssl=1" alt="Primeiro Slide">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2023/04/2000-BMW-740IL-a-venda-The-garage-11.jpg?strip=info&w=1500&ssl=1" alt="Segundo Slide">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i2.wp.com/thegarage.com.br/wp-content/uploads/2023/04/2000-BMW-740IL-a-venda-The-garage-23.jpg?strip=info&w=1500&ssl=1" alt="Terceiro Slide">
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>

                </div>
                
                <div class="card-body">

                    <h5 class="card-title">2000 BMW 740IL – BLINDADO</h5>
                    <p class="card-text">
                        Motor: V8 de 4.4 Litros.</br>
                        Transmissão: Automático de 5 velocidades.</br>
                        Cerca de 110.000 km no hodômetro.
                    </p>
                    
                    <a href="https://autoesporte.globo.com/carros/noticia/2013/04/classico-do-dia-lotus-omega.ghtml" class="btn btn-primary" target="_blank">Visitar</a>
                </div>
            </div>
        </div>

        
        
        
        
        
        <!-- Card 2 -->
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://i1.wp.com/thegarage.com.br/wp-content/uploads/2023/11/1996-Alfa-Romeo-155-Super-venda-compra-the-garage-for-sale-7.jpg?strip=info&w=1500&ssl=1" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2023/11/1996-Alfa-Romeo-155-Super-venda-compra-the-garage-for-sale-4.jpg?strip=info&w=1500&ssl=1" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i2.wp.com/thegarage.com.br/wp-content/uploads/2023/11/1996-Alfa-Romeo-155-Super-venda-compra-the-garage-for-sale-15.jpg?strip=info&w=1500&ssl=1" alt="Terceiro Slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">1996 ALFA ROMEO 155 SUPER</h5>
                    <p class="card-text">
                        Motor: 4 cilindros 2.0 16V.</br>
                        Transmissão: manual de 5 marchas.</br>
                        Cerca de 160.000 Km no hodômetro.
                    </p>
                    <a href="https://autoesporte.globo.com/carros/noticia/2013/04/classico-do-dia-lotus-omega.ghtml" class="btn btn-primary" target="_blank">Visitar</a>
                </div>
            </div>
        </div>

        
        
        
        
        
        <!-- Card 3 -->
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2024/04/1993-Mercedes-Benz-190E-2.0-venda-the-garage-for-sale-6-of-15.jpg?strip=info&w=1500&ssl=1" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i2.wp.com/thegarage.com.br/wp-content/uploads/2024/04/1993-Mercedes-Benz-190E-2.0-venda-the-garage-for-sale-3-of-15.jpg?strip=info&w=1500&ssl=1" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i2.wp.com/thegarage.com.br/wp-content/uploads/2024/04/1993-Mercedes-Benz-190E-2.0-venda-the-garage-for-sale-14-of-15.jpg?strip=info&w=1500&ssl=1" alt="Terceiro Slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">1993 MERCEDES-BENZ 190E</h5>
                    <p class="card-text">
                        Motor: 2.0 de 4 cilindros em linha.</br>
                        Transmissão: manual com 5 velocidades.</br>
                        Cerca de 117.000 km no hodômetro.
                    </p>
                    <a href="https://autoesporte.globo.com/carros/noticia/2013/04/classico-do-dia-lotus-omega.ghtml" class="btn btn-primary" target="_blank">Visitar</a>
                </div>
            </div>
        </div>

        
        
        <div class="spacer"></div>
        
        
        
        <!-- Card 4 -->        
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://i2.wp.com/thegarage.com.br/wp-content/uploads/2024/07/2014-jaguar-xf-premium-luxury-venda-compra-the-garage-for-sale-26.jpg?strip=info&w=1500&ssl=1" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2024/07/2014-jaguar-xf-premium-luxury-venda-compra-the-garage-for-sale-103-scaled.jpg?resize=1536%2C864&ssl=1" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2024/07/2014-jaguar-xf-premium-luxury-venda-compra-the-garage-for-sale-75-scaled.jpg?fit=2400%2C1350&ssl=1" alt="Terceiro Slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">2015 JAGUAR XF PREMIUM LUXURY</h5>
                    <p class="card-text">
                        Motor: 4 Cilindros em linha 2.0.</br>
                        Transmissão: Automático de 7 velocidades.</br>
                        Cerca de 103.475 km no hodômetro.
                    </p>
                    <a href="https://autoesporte.globo.com/carros/noticia/2013/04/classico-do-dia-lotus-omega.ghtml" class="btn btn-primary" target="_blank">Visitar</a>
                </div>
            </div>
        </div>


        <!-- Card 5 -->
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators5" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators5" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators5" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2024/04/2017-porsche-carrera-s-venda-compra-the-garage-for-sale-5-1.jpg?strip=info&w=1500&ssl=1" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2024/04/2017-porsche-carrera-s-venda-compra-the-garage-for-sale-2-1.jpg?resize=1536%2C1025&ssl=11" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i1.wp.com/thegarage.com.br/wp-content/uploads/2024/04/2017-porsche-carrera-s-venda-compra-the-garage-for-sale-14-1.jpg?strip=info&w=1500&ssl=1" alt="Terceiro Slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">2017 PORSCHE 911 CARRERA S</h5>
                    <p class="card-text">
                        Motor:  Boxer Biturbo 3.0</br>
                        Transmissão: Automática PDK de 7 velocidades</br>
                        Cerca de 27.700 km no hodômetro.
                    </p>
                    <a href="https://autoesporte.globo.com/carros/noticia/2013/04/classico-do-dia-lotus-omega.ghtml" class="btn btn-primary" target="_blank">Visitar</a>
                </div>
            </div>
        </div>


        <!-- Card 6 -->
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators6" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators6" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators6" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://i1.wp.com/thegarage.com.br/wp-content/uploads/2024/03/2015-BMW-640-Gran-Coupe%E2%80%93Blindado-BSS-venda-compra-the-garage-for-sale-8-of-18.jpg?strip=info&w=1500&ssl=1" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2024/03/2015-BMW-640-Gran-Coupe-a-venda-the-garage-for-sale-6.jpg?strip=info&w=1500&ssl=1" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i0.wp.com/thegarage.com.br/wp-content/uploads/2024/03/2015-BMW-640-Gran-Coupe%E2%80%93Blindado-BSS-venda-compra-the-garage-for-sale-16-of-18.jpg?strip=info&w=1500&ssl=1" alt="Terceiro Slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators6" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators6" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">2015 BMW 640i GRAN COUPÉ BLINDADO</h5>
                    <p class="card-text">
                        Motor: 3.0L 6 cilindros Twin Turbo 24 válvulas.</br>
                        Transmissão: Automática de 8 velocidades com modo manual.</br>
                        Cerca de 50.000 km no hodômetro.
                    </p>
                    <a href="https://autoesporte.globo.com/carros/noticia/2013/04/classico-do-dia-lotus-omega.ghtml" class="btn btn-primary" target="_blank">Visitar</a>
                </div>
            </div>
        </div>


    </div>
</div>

<div id="containera"> 
  <div class="batataa">

        <div class="chega">
            <h4>Comprar</h4>
            <p>Comprar novo</p>
            <p>Comprar usado</p>
        </div>
           
        <div class="batata">
            <h4>Vender</h4>
            <p>Vender carro</p>
            <p>Gerenciar meu Anuncio</p>
        </div>
    
        <div class="gol">
                <h4>Serviços</h4>
                <p>tabela fipe</p>
                <p>financiamento</p>
        </div>
    
        <div class="jogo">
                    <h4>Ajuda</h4>
                    <p>para você</p>
                    <p>Segurança</p>
                    <p>Sobre nós</p>
                    <p>Suporte</p>
        </div>

        <div class="direitos">
          <p>©TODOS OS DIREITOS RESERVADOS OLP 2024</p>
        </div>      

    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>