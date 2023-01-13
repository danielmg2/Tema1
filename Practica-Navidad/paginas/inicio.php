<?php
session_start();
require ('../Funciones/funcionesBD.php');
require ('../seguro/conexionBD.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <img src="../imagenes/logo.png" alt="" width="100" heigth="100">
        <h1>Camisetas Deportivas</h1>
        <div id="recuadro">
            <?php
                echo $_SESSION['perfil'];
            ?>
            <a href="./editarUSR.php">Editar Perfil</a>
            Cerrar sesion
        </div>
    </header>
    <?php
    if(($_SESSION['perfil']=="administrador")||($_SESSION['perfil']=='moderador')){
    ?>
        <div id="nav">
            <a href="">Productos</a>
            <a href="./ventas.php">Ventas</a>
            <a href="./albaranes.php">Albaranes</a>
            
        </div>
        
    <?php
    }
    ?>
    <!-- Consulta de la tabla de productos -->
    <!-- Mostrar la tabla -->
    <!-- dependidendo del usuario que inicie sesion se mostrara una cosa u otra -->
    <?php
        leeProductos();
        
        if($_SESSION['perfil']=="administrador"){
            ?>
            <form id="formInsertar"action="../Funciones/redireccion.php"  method ="post" enctype="multipart/form-data">  
                <input type="hidden" name="tabla" value="productos">
                <label for="editar">Nuevo registro:</label>
                <input type="submit" value="Insertar" name="insertar">
            </form>
            <?php
        }
    
        
    ?>
    
</body>
</html>