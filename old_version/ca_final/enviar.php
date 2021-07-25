<?php
    $destino="Ivan_Noriega1@outlook.com";
    $correo=$_POST["email"];
    $mensaje=$_POST["mensaje"];
    mail($correo, "contacto", $mensaje);
    header("location:dashboard.php")
?>