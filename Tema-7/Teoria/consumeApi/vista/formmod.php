<?php
require_once '../funciones/funciones.php';

?>

<form action="../controlador/conciertosControlador.php" method>


    <select >
        <option value=0>Seleccione un grupo</option>
        <?

        cargarConciertos();
        ?>
    </select>
    <label for="grupo">Grupo
        <input type="text" name="grupo" id="grupo">
    </label>
    
    <label for="fecha">Fecha
        <input type="text" name="fecha" id="fecha">
    </label>

    <label for="precio">Precio
        <input type="text" name="precio" id="precio">
    </label>
    
    <label for="lugar">Lugar
        <input type="text" name="lugar" id="lugar">
    </label>


    <input type="submit" value="guardar" name="guardar">





</form>