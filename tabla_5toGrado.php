<?php
require_once './administrador/Tools/conexion.php';

$nombre = $_POST['nombre_5toGrado'];
$edad = $_POST['edad_5toGrado'];
$direccion = $_POST['direccion_5toGrado'];
$fechaNacimiento = $_POST['fecha_nacimiento_5toGrado'];
$fechaRegistro = $_POST['fecha_registro_5toGrado'];

if (empty($nombre) || empty($edad) || empty($direccion) || empty($fechaNacimiento) || empty($fechaRegistro)) {
    echo '
    <script>
    alert("Error: campos no completados");
    window.location = "5to_grado.php";
    </script>
    ';
    exit;
}

$insertar = "INSERT INTO estudiantes_quintoGrado VALUES ('', '$nombre', '$edad', '$direccion', '$fechaNacimiento', '$fechaRegistro')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo '
    <script>
    alert("Usuario agregado exitosamente");
    window.location = "5to_grado.php";
    </script>
    ';
    exit;
} else{
    echo '
    <script>
    alert("Error al agregar usuario");
    window.location = "5to_grado.php";
    </script>
    ';
    exit;
}


?>
