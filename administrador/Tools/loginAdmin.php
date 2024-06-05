<?php


if (!empty($_POST['btningresar_admin'])){
    if (!empty($_POST['usuario']) and !empty($_POST['pass'])){
        $usuario = $_POST['usuario'];
        $pass = $_POST['pass'];
        $sql = $conexion->query("SELECT * FROM usuarios_administrador WHERE usuario='$usuario' and pass='$pass'");
         if ($datos=$sql->fetch_object()) {
             header('location: Index.php');
         } else {
             echo "<div class='alert'> acceso denegado </div>";
         }
         
    } else{
        echo "<div class='alert'> campos vacios </div>";
    }

}
?>

