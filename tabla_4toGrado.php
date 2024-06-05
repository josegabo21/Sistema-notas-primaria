<?php
require_once './administrador/Tools/conexion.php';

$nombre = $_POST['nombre_4toGrado'];
$edad = $_POST['edad_4toGrado'];
$direccion = $_POST['direccion_4toGrado'];
$fechaNacimiento = $_POST['fecha_nacimiento_4toGrado'];
$fechaRegistro = $_POST['fecha_registro_4toGrado'];

if (empty($nombre) || empty($edad) || empty($direccion) || empty($fechaNacimiento) || empty($fechaRegistro)) {
    echo '
    <script>
    alert("Error: campos no completados");
    window.location = "4to_grado.php";
    </script>
    ';
    exit;
}

$insertar = "INSERT INTO estudiantes_cuartoGrado VALUES ('', '$nombre', '$edad', '$direccion', '$fechaNacimiento', '$fechaRegistro')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo '
    <script>
    alert("Usuario agregado exitosamente");
    window.location = "4to_grado.php";
    </script>
    ';
    exit;
} else{
    echo '
    <script>
    alert("Error al agregar usuario");
    window.location = "4to_grado.php";
    </script>
    ';
    exit;
}


?>
