<?php
require_once './administrador/Tools/conexion.php';

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$rol = $_POST['rol'];

if (empty($nombre) || empty($usuario) || empty($pass) || empty($rol)) {
    echo '
    <script>
    alert("Error: campos no completados");
    window.location = "./lista_usuarios.php";
    </script>
    ';
    exit;
}

$insertar = "INSERT INTO usuarios_administrador VALUES ('', '$usuario', '$pass', '$nombre', '$rol')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo '
    <script>
    alert("Usuario agregado exitosamente");
    window.location = "./lista_usuarios.php";
    </script>
    ';
    exit;
} else{
    echo '
    <script>
    alert("Error al agregar usuario");
    window.location = "./lista_usuarios.php";
    </script>
    ';
    exit;
}


?>


