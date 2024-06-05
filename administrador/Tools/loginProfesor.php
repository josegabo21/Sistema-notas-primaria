<?php


if (!empty($_POST['btnIngresar_profe'])){
    if (!empty($_POST['usuarioProfesor']) and !empty($_POST['passProfesor'])){
        $usuario = $_POST['usuarioProfesor'];
        $pass = $_POST['passProfesor'];
        $sql = $conexion->query("SELECT * FROM usuarios_profesor WHERE usuario='$usuario' and pass='$pass'");
         if ($datos=$sql->fetch_object()) {
             header('location: IndexProfesor.php');
         } else {
             echo "<div class='alert'> acceso denegado </div>";
         }
         
    } else{
        echo "<div class='alert'> campos vacios </div>";
    }

}
?>

