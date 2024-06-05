<?php
require_once './administrador/Tools/conexion.php';

if(!empty($_GET["id"])){
    $id = $_GET["id"];
    $sql=$conexion->query("DELETE FROM usuarios_profesor WHERE ID=$id");
    if ($sql=true) {?>
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
                icon: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1500
});
            })

        </script>
    <?php } ?>

    <script>
           setTimeout( () => {
               window.history.replaceState(null, null, window.location.pathname);
           }, 0);

        </script>
    

<?php }