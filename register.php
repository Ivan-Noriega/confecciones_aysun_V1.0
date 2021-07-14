<?php
session_start();
require_once('config.php');
 
if(isset($_POST['submit']))
{
    if(isset($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['password']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $firstName = trim($_POST['nombre']);
        $lastName = trim($_POST['apellido']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $hashPassword = $password;
        $options = array("cost"=>4);
        $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
        $date = date('Y-m-d H:i:s');
 
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $sql = 'select * from users where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);
            
            if($stmt->rowCount() == 0)
            {
                $sql = "insert into users (nombre, apellido, email, `password`, created_at,updated_at) values(:vnombre,:vapellido,:email,:pass,:created_at,:updated_at)";
            
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':vnombre'=>$firstName,
                        ':vapellido'=>$lastName,
                        ':email'=>$email,
                        ':pass'=>$hashPassword,
                        ':created_at'=>$date,
                        ':updated_at'=>$date
                    ];
                    
                    $handle->execute($params);
                    
                    $success = 'Usuario creado correctamente!!';
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valFirstName = $firstName;
                $valLastName = $lastName;
                $valEmail = '';
                $valPassword = $password;
 
                $errors[] = 'el Email ya esta registrado';
            }
        }
        else
        {
            $errors[] = "el Email no es valido";
        }
    }
    else
    {
        if(!isset($_POST['nombre']) || empty($_POST['nombre']))
        {
            $errors[] = 'el nombre es requerido';
        }
        else
        {
            $valFirstName = $_POST['apellido'];
        }
        if(!isset($_POST['apellido']) || empty($_POST['apellido']))
        {
            $errors[] = 'el apellido es requerido';
        }
        else
        {
            $valLastName = $_POST['apellido'];
        }
 
        if(!isset($_POST['email']) || empty($_POST['email']))
        {
            $errors[] = 'Email es requerido';
        }
        else
        {
            $valEmail = $_POST['email'];
        }
 
        if(!isset($_POST['password']) || empty($_POST['password']))
        {
            $errors[] = 'el Password es requerido';
        }
        else
        {
            $valPassword = $_POST['password'];
        }
        
    }
 
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
          <?php 
            if(isset($errors) && count($errors) > 0)
            {
              foreach($errors as $error_msg)
            {
              echo '<div class="alert alert-danger">'.$error_msg.'</div>';
            }
            }
                                        
              if(isset($success))
            {
                                          
              echo '<div class="alert alert-success">'.$success.'</div>';
            }
          ?>
          <form class="text-center" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label>Nombre</label>
            <br>
            <input type="text" name="nombre">
            <br>
            <label>Apellido</label>
            <br>
            <input type="text" name="apellido">
            <br>
            <label>Correo electrónico</label>
            <br>
            <input type="email" name="email">
            <br>
            <label>Contraseña</label>
            <br>
            <input type="password" name="password">
            <br>
            <label>Repita contraseña</label>
            <br>
            <input type="password" name="repassword">
            <br>
            <input type="submit" name="submit" value="Enviar" class="btn btn-outline-warning" style="width: 25%; margin-top: 20px; background-color: rgba(230, 199, 78, 0.4);overflow-y: hidden;">
          
            
            
          </form>       
          <a href="/ca_final/index.php" class="text-center">
            Si te has registrado has clic aquí
          </a>
          <div class="d-flex align-items-center justify-content-center">
          </div>
        </div>
    </div> 

   
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