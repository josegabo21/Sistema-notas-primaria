<?php
session_start();
if(!empty($_SESSION["usuario"])){
    header("location: option_profe.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"type="text/css" href="administrador/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>SISTEMA DE CURSOS</title>
</head>
<body>
    <header class="main-header">
        <div class="main-cont">
            <div class="desc-header">
                <img src="administrador/imagenes/school.svg" alt="image school">
                <p>24 de Junio</p>
            </div>
        </div>   
        <div class="cont-header">
            <h1>Bienvenido!</h1>
                            
             <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                    <label class="container">
                        <a href="./option.php">
                        <button class="select" id="administrador" value="Admin">Administrador</button>
                        </a>
                        
                        <a href="./option_profe.php">
                        <button href="administrador/Tools/option_profe"  class="select" id="usuarioProfe" value="Usuario">Profesor</button>
                        </a> 
                    </label>         
                        

                    <div class="form" id="profesor">
                        <form id="formProfesor" action="" method="POST" onsubmit="return validar()">
                            <h2>Profesor</h2>
                            
                            <?php
                            require './administrador/Tools/conexion.php';
                            require './administrador/Tools/loginProfesor.php';
                            
                            ?>
                       
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuarioProfesor" id="usuario" placeholder="Nombre de usuario">
                            <label for="password">Contraseña</label>
                            <input type="password" name="passProfesor" id="pass" placeholder="Contraseña">
                            <div id="mensajeProfesor"></div>
                            <div class="ub2">
                                <input id="verContraseña" type="checkbox" onclick="verpassword()" >Mostrar contraseña
                            </div>
                            
                            <input type="submit" id="loginProfesor" name="btnIngresar_profe" value="INICIAR SESION">
                        </form>
                    </div>
                </div>  
              
                </div>
                
            </div>
        </div>
       
        
    </header>

       
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="administrador/js/jquery-3.7.0.min.js"></script>
    <script src="administrador/js/script.js"></script>


</body>
</html>