<?php
require_once './administrador/Tools/conexion.php';

$nombre = $_POST['nombre_2doGrado'];
$edad = $_POST['edad_2doGrado'];
$direccion = $_POST['direccion_2doGrado'];
$fechaNacimiento = $_POST['fecha_nacimiento_2doGrado'];
$fechaRegistro = $_POST['fecha_registro_2doGrado'];

if (empty($nombre) || empty($edad) || empty($direccion) || empty($fechaNacimiento) || empty($fechaRegistro)) {
    echo '
    <script>
    alert("Error: campos no completados");
    window.location = "2do_grado.php";
    </script>
    ';
    exit;
}

$insertar = "INSERT INTO estudiantes_segundogrado VALUES ('', '$nombre', '$edad', '$direccion', '$fechaNacimiento', '$fechaRegistro')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo '
    <script>
    alert("Usuario agregado exitosamente");
    window.location = "2do_grado.php";
    </script>
    ';
    exit;
} else{
    echo '
    <script>
    alert("Error al agregar usuario");
    window.location = "2do_grado.php";
    </script>
    ';
    exit;
}


?>
