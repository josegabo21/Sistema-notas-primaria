<?php
require_once './administrador/Tools/conexion.php';


$sql = "SELECT * FROM usuarios WHERE estado != 0";
$query = $pdo->prepare($sql);
$query->execute();

$consulta = $query->fetchAll(PDO::FETCH_ASSOC);

for($i = 0; $i < count($consulta);$i++){
    if($consulta[$i]['estado'] == 1){
        $consulta[$i]['estado'] == '<span class="badge badge-success">Activo</span>';
    } else {
        $consulta[$i]['estado'] == '<span class="badge badge-danger">Inactivo</span>';
    }

    $consulta[$i]['acciones'] = '
            <button class="btn btn-primary" tittle="Editar" onclick="editarUsuario('.$consulta[$i]['ID'].')">Editar</button>
            <button class="btn btn-primary" tittle="Eliminar" onclick="eliminarUsuario('.$consulta[$i]['ID'].')">Eliminar</button>
                                ';
}

echo json_encode($consulta, JSON_UNESCAPED_UNICODE);

?>