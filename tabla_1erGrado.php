<?php
require_once './administrador/Tools/conexion.php';

$nombre = $_POST['nombre_1erGrado'];
$edad = $_POST['edad_1erGrado'];
$direccion = $_POST['direccion_1erGrado'];
$fechaNacimiento = $_POST['fecha_nacimiento_1erGrado'];
$fechaRegistro = $_POST['fecha_registro_1erGrado'];

if (empty($nombre) || empty($edad) || empty($direccion) || empty($fechaNacimiento) || empty($fechaRegistro)) {
    echo '
    <script>
    alert("Error: campos no completados");
    window.location = "1er_grado.php";
    </script>
    ';
    exit;
}

$insertar = "INSERT INTO estudiantes_primerGrado VALUES ('', '$nombre', '$edad', '$direccion', '$fechaNacimiento', '$fechaRegistro')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo '
    <script>
    alert("Usuario agregado exitosamente");
    window.location = "1er_grado.php";
    </script>
    ';
    exit;
} else{
    echo '
    <script>
    alert("Error al agregar usuario");
    window.location = "1er_grado.php";
    </script>
    ';
    exit;
}


?>
