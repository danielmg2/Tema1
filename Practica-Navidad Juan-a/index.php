<?php
session_start();
require('./Funciones/funcionesBD.php');
require('./seguro/conexionBD.php');
require('./ejecutarScript.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/estilos.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Inicio</title>
</head>

<body>
    <header class="bg-dark">
        <div class="container-fluid">
            <div class="row ">
                <?php
                if (compruebaBase() == "camisetas") {
                ?>
                    <div class="col-4 mt-4 ps-4">
                        <img src="./imagenes/logo1.png" alt="" width="100" heigth="100">
                    </div>
                    <div class="col-4 mt-4 text-center">
                        <h1 class="text-light">Camisetas Deportivas</h1>
                    </div>
                    <div id="recuadro" class="col-4 mt-4 text-end pe-4">
                        <?php
                        if ($_SESSION == null) {
                        ?>
                            <a href="./paginas/login.php">Iniciar Sesión</a><br>
                            <a href="./paginas/nuevoUSR.php">Nuevo Usuario</a><br>
                        <?php
                        } else {
                        ?>

                            <a class="pe-4" href="./paginas/editarUSR.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle text-light" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg></a>
                        <?php
                        }
                        ?>
                        <a href="./paginas/logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-left text-light" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                            </svg>
                        </a>
                    </div>
            </div>
            <?php
                    if ($_SESSION != null) {
                        if (($_SESSION['perfil'] == "administrador") || ($_SESSION['perfil'] == 'moderador')) {
            ?>
                    <nav class="navbar navbar-expand-lg navbar-light  ">
                        <div class="container-fluid">
                            <button class="navbar-toggler bg-light mt-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-start text-light" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link text-light" href="./paginas/ventas.php">Ventas</a>
                                    <a class="nav-link text-light" href="./paginas/albaranes.php">Albaranes</a>
                                </div>
                            </div>
                        </div>
                    </nav>
            <?php
                        }
                    }
            ?>
        </div>
    </header>

    <main class="container-fluid ">


        <div class="album py-5 ">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <!-- Consulta de la tabla de productos -->
                    <!-- Mostrar la tabla -->
                    <!-- dependidendo del usuario que inicie sesion se mostrara una cosa u otra -->


                <?php
                    leeProductos();
                } else {
                    crearBase();

                    header("Refresh:0.1");
                    exit();
                }
                ?>

                </div>
            </div>
        </div>
        <div class="text-end">
            <p>
                <?php
                if ($_SESSION != null) {
                    if ($_SESSION['perfil'] == "administrador") {
                ?>

            <form id="formInsertar" action="./Funciones/redireccion.php" method="post" enctype="multipart/form-data">
                <br>
                <p>
                    <input type="hidden" name="tabla" value="productos">
                    <label for="editar">Nuevo registro:</label>
                    <input type="submit" value="Insertar" name="insertar">
                </p>
            </form>
            <?php
                    }
                }
            ?>
            </p>
        </div>
    </main>
    <footer class="container-fluid bg-dark">
        <div>
            <p class="text-light">
            Practica De maría par Juán 
            </p>
        </div>
    </footer>


</body>

</html>