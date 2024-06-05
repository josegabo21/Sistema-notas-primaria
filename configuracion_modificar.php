<?php
require_once './administrador/Tools/conexion.php';


if (empty($_POST["btnModificar"])) {
    if (!empty($_POST["id1"]) and !empty($_POST["nombreModificar"]) and !empty($_POST["usuarioModificar"]) and !empty($_POST["passModificar"])) {
        $id=$_POST["id"];
        $nombre = $_POST["nombreModificar"];
        $usuario = $_POST["usuarioModificar"];
        $pass = $_POST["passModificar"];


        $sql=$conexion->query("UPDATE usuarios_administrador set nombre='$nombre', usuario='$usuario', pass='$pass' WHERE ID='$id' ");
        if ($sql==true) {?>
            <script>
            $(function notificacion(){
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your work has been saved",
                    showConfirmButton: false,
                    timer: 3000
            });
            })

        </script>
         <?php  
        } else {
             ?>
        <script>
            $(function notificacion(){
                Swal.fire({
                position: "top-end",
                icon: "error",
                title: "Error al modificar",
                showConfirmButton: false,
                timer: 1500
});
            })

        </script>
    <?php }
    }else{ ?>

        <script>
            $(function notificacion(){
                Swal.fire({
                position: "top-end",
                icon: "error",
                title: "campos vacios",
                showConfirmButton: false,
                timer: 1500
            });
            })

        </script>
    <?php }
    ?>

    <script>
           setTimeout( () => {
               window.history.replaceState(null, null, window.location.pathname);
           }, 0);

        </script>
    

<?php }
