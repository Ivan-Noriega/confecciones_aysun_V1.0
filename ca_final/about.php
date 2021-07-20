<?php 
    session_start();
  
    if(!$_SESSION['id']){
        header('location:index.html');
    }
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Self Import-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="shortcut icon" href="/img/ico.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/ca_final/img/ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="/ca_final/css/styles_navbar.css">
    <link rel="stylesheet" href="/ca_final/css/styles_about.css">
    <script src="https://kit.fontawesome.com/c6eeb44b61.js" crossorigin="anonymous"></script>
    <script defer src="/ca_final/java docs/navscroll.js"></script>
<!--End Self Import-->

    <title>Confecciones "Aysun"</title>
  </head>
  <body>
    <!--Responsive nav-->
    <header>
        <nav class="nab">
        <a href="" class="logo d-flex align-items-center">
          <img src="/ca_final/img/ca-logo.svg" alt="">
        </a>
        <h5>
          Confecciones "Aysun"
        </h5>
        <button class="toggle" aria-label="Abrir menu">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
          <li>
            <a href="/index.html">
              Inicio
            </a>
          </li>
          <li>
            <a href="/ca_final/contacto.php">
              contacto
            </a>
          </li>
          <li>
            <a href="/ca_final/about.php">
              nosotros
            </a>
          </li>
          <li>
          <a href="logout.php?logout=true">Logout</a>
          </li>
        </ul>
      </nav>
    </header>
    <!--End Responsive nav-->

    <div class="supreme">
      <div class="caja">
      <div class="grid-contenedor">
            <img src="/ca_final/img/promotion.jpg" alt="" class="promotion">
            <div class="contenedor">
              <h3 class="derecha superior">
                Más Estilo
              </h3>
              <h3 class="izquierda superior">
                Mayor calidad
              </h3>
              <p class="centro">
                Somos una empresa dedicada,  pensando siempre en las necesidades de nuestros clientes y  la calidad brindada en todos nuestros productos.
              </p>
              <h3 class="derecha inferior">
                Creamos sueños
              </h3>
              <h3 class="izquierda inferior">
                Creamos soluciones
              </h3>
              <p class="centro">
                Innovamos permanentemente en nuestros procesos productivos.
                <br>
                Creamos nuevos diseños para cada situacion y acorde a la moda.
              </p>
            </div>
          </div>
        </div>
    </div>

    <!--Responsive footer-->
                          
    <footer class="bg-light text-center text-lg-start">
      
        <div class="text-center p-3" style="background-color: rgba(191, 153, 0, 1);">
          © 2020 Copyright:
          <a clas s="text-dark" href="/index.html">Confecciones Aysun</a>
        </div>
        
    </footer>  
                            
    <!--End Responsive footer-->































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>