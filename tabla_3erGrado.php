<?php
require_once './administrador/Tools/conexion.php';

$nombre = $_POST['nombre_3erGrado'];
$edad = $_POST['edad_3erGrado'];
$direccion = $_POST['direccion_3erGrado'];
$fechaNacimiento = $_POST['fecha_nacimiento_3erGrado'];
$fechaRegistro = $_POST['fecha_registro_3erGrado'];

if (empty($nombre) || empty($edad) || empty($direccion) || empty($fechaNacimiento) || empty($fechaRegistro)) {
    echo '
    <script>
    alert("Error: campos no completados");
    window.location = "3er_grado.php";
    </script>
    ';
    exit;
}

$insertar = "INSERT INTO estudiantes_tercerGrado VALUES ('', '$nombre', '$edad', '$direccion', '$fechaNacimiento', '$fechaRegistro')";

$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo '
    <script>
    alert("Usuario agregado exitosamente");
    window.location = "3er_grado.php";
    </script>
    ';
    exit;
} else{
    echo '
    <script>
    alert("Error al agregar usuario");
    window.location = "3er_grado.php";
    </script>
    ';
    exit;
}


?>
