<?php
session_start();
require_once('config.php');
 
if(isset($_POST['submit']))
{
	if(isset($_POST['email'],$_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
 
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$sql = "select * from users where email = :email ";
			$handle = $pdo->prepare($sql);
			$params = ['email'=>$email];
			$handle->execute($params);
			if($handle->rowCount() > 0)
			{
				$getRow = $handle->fetch(PDO::FETCH_ASSOC);
				if(password_verify($password, $getRow['password']))
				{
					unset($getRow['password']);
					$_SESSION = $getRow;
					header('location:dashboard.php');
					exit();
				}
				else
				{
					$errors[] = "Error en  Email o Password";
				}
			}
			else
			{
				$errors[] = "Error Email o Password";
			}
			
		}
		else
		{
			$errors[] = "Email no valido";	
		}
 
	}
	else
	{
		$errors[] = "Email y Password son requeridos";	
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

    <!--Self Import-->
        <link rel="shortcut icon" href="/ca_final/img/ico.ico" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/ca_final/css/styles_login.css">
    <!--End Self Import-->
    <title>Confecciones "Aysun"</title>
  </head>
  <body>
    <div class="blur d-flex justify-content-center align-items-center">
        <div class="card text-center d-flex justify-content-center">
            <div class="">
                <img src="/ca_final/img/ca-logo.svg" class="img-fluid" alt="">
<?php
   if (isset($errors) && count($errors) > 0) {
      foreach ($errors as $error_msg) {
      echo '<div class="alert alert-danger">' . $error_msg . '</div>';
      }
    }
?>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label>
                    E-mail
                </label>
                <br>
                <input type="email" name="email">
                <br>
                <label>
                    Contraseña
                </label>
                <br>
                <input type="password" name="password">
                <br>
              
                <input type="submit" value="Enviar" class="btn btn-outline-warning" style="width: 8%; margin-top: 25px; background-color: rgba(230, 199, 78, 0.4);" name="submit">
            </form>
                <a href="/ca_final/register.php">
                    o regístrate aquí
                </a>            
            </div>
        </div>
    </div>
    <!--Responsive footer-->
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="width: 100%; margin-top: 91vh; position: absolute; background-color: rgba(191, 153, 0, 1);">
          © 2020 Copyright:
          <a class="text-dark" href="/index.html">Confecciones Aysun</a>
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