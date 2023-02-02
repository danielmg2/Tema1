<?php
    session_start();
    require ('../Funciones/funcionesBD.php');
    require ('../seguro/conexionBD.php');
    require ('../Funciones/validaForm.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Editar Usuario</title>
</head>
<body>
<header class="bg-dark" >
        <div class="container-fluid">
        <div class="row " >
            <div class="col-3  ">
                <img src="../imagenes/logo.png" alt="" width="100" heigth="100">

            </div>
            <div class="col-6  text-center">
                <h1 class="text-light">Edición de usuario</h1>

            </div>
        </div>
            
            
        </div>
   </header>

    
    <div class="login">
       
        <div class="login-header">
            
        </div>
        <form class="login-form" action="../paginas/editarUSR.php" method="post">
            
            <p>
                <label for="nombre">Nombre de usuario:</label>
                <input type="text" readonly name="nombre" id="nombre" value="<?php echo $_SESSION['user']?>">
            </p>
            <p>
                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
                <?php if((editaUSR())&&(vacio("contrasena"))){
                    echo "<span>CONTRASEÑA VACIA</span>";
                }?>
            </p>
            <p>
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="confirmacionC" id="confirmacionC" placeholder=" Repite Contraseña">
                <?php if((editaUSR())&&(vacio("confirmacionC"))){
                    echo "<span>CONTRASEÑA VACIA</span>";
                }
                
                if((editaUSR())&&(!iguales())){
                    echo "<span>LAS CONTRASEÑAS NO COINCIDEN</span>";
                }
                ?>
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Email">
                <?php if((editaUSR())&&(vacio("email"))){
                    echo "<span>EMAIL VACIO</span>";
                }?>
            </p>
            <p>
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha" value="" placeholder="Fecha">
                <?php if((editaUSR())&&(vacio("fecha"))){
                    echo "<span>FECHA VACIA</span>";
                }?>
            </p>
            <input class="login-button" type="submit" value="Editar Usuario" name="eUsuario">
        </form>
    </div>
        <?php
        if(validaEditaUsr()){
            modUser($_SESSION['user'],$_REQUEST['contrasena'],$_REQUEST['email'],$_REQUEST['fecha']);
            header('Location: ../index.php');
            exit(); 
        }
        // if(isset($_REQUEST['eUsuario'])){
        //      if($_REQUEST['contrasena']==$_REQUEST['confirmacionC']){

        //          modUser($_SESSION['user'],$_REQUEST['contrasena'],$_REQUEST['email'],$_REQUEST['fecha']);
        //      }
        // }
    
    ?>
</body>
</html>