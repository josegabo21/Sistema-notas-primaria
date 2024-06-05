<?php
require_once './administrador/Tools/conexion.php';

$nombre = $_POST['nombreProfe'];
$usuario = $_POST['usuarioProfe'];
$pass = $_POST['passProfe'];
$rol = $_POST['rolProfe'];
$edad = $_POST['edadProfe'];
$cedula = $_POST['cedulaProfe'];
$correo = $_POST['correoProfe'];
$telefono = $_POST['telefonoProfe'];

if (empty($nombre) || empty($usuario) || empty($pass) || empty($rol) || empty($edad) || empty($cedula) || empty($correo) || empty($telefono)) {
    echo '
    <script>
    alert("Error: campos no completados");
    window.location = "./lista_usuarios.php";
    </script>
    ';
    exit;
}

$insertar = "INSERT INTO usuarios_Profesor VALUES ('', '$usuario', '$pass', '$nombre', '$rol', '$edad', '$cedula', '$correo', '$telefono')";

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
