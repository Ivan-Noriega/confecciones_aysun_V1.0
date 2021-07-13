

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Self import-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
      <link rel="shortcut icon" href="img/ico.ico" />
      <link rel="stylesheet" href="/ca_final/css/styles_register.css">
    <!--End Self import-->
    <title>Confecciones "Aysun"</title>
  </head>

  <body>


    <div class="bg">

        <img src="/ca_final/img/bg.jpg" alt="">

    </div>

    <div class="blur d-flex justify-content-center align-items-center">
        
        <div class="card">
          <h5 class="text-center">
            Confecciones "Aysun"
          </h5>
          <img src="/ca_final/img/ca-logo.svg" class="img-fluid" alt="">   
          <form class="text-center" action="register_page.php">
            <label>Usuario</label>
            <br>
            <input type="text" name="usuario">
            <br>
            <label>Correo electrónico</label>
            <br>
            <input type="email" name="email">
            <br>
            <label>Contraseña</label>
            <br>
            <input type="password" name="contraseña">
            <br>
            <label>Repita contraseña</label>
            <br>
            <input type="password">
            <br>
            <input type="submit" value="Enviar" class="btn btn-outline-warning" style="width: 25%; margin-top: 25px; background-color: rgba(230, 199, 78, 0.4);">
          </form>       
          <div class="d-flex align-items-center justify-content-center">
          </div>
        </div>
    </div> 

    <!--Responsive footer-->
    <footer class="bg-light text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style=" position: absolute; background-color: rgba(191, 153, 0, 1); width: 100%; margin-top: 91vh;">
        © 2020 Copyright:
        <a class="text-dark" href="/ca_final">Confecciones Aysun</a>
      </div>
      <!-- Copyright -->
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