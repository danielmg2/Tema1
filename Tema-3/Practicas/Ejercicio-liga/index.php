<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio tablas de la liga</h1>
    <table border = "1px">
    <?php
        $liga =
        array(
            "Zamora" =>  array(
                "Salamanca" => array(
                    "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                ),
                "Avila" => array(
                    "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                ),
                "Valladolid" => array(
                    "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 1
                )
            ),
            "Salamanca" =>  array(
                "Zamora" => array(
                    "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                ),
                "Avila" => array(
                    "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                ),
                "Valladolid" => array(
                    "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 2, "Penalti" => 1
                )
            ),
            "Avila" =>  array(
                "Zamora" => array(
                    "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 2
                ),
                "Salamanca" => array(
                    "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 3, "Penalti" => 0
                ),
                "Valladolid" => array(
                    "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 0, "Penalti" => 1
                )
            ),
            "Valladolid" =>  array(
                "Zamora" => array(
                    "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                ),
                "Salamanca" => array(
                    "Resultado" => "3-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                ),
                "Avila" => array(
                    "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 2
                )
            ),
        );
    ?> 
        <?php

            //Muestro la primera fila
            echo("<tr>");
            echo("<td>");
            echo("EQUIPOS");
            echo("</td>");
            //Primera fila
                foreach ($liga as $key => $value) {
                    # code...
                    echo("<td>");
                    echo($key);
                    echo(" ");  
                    echo("</td>");
                }
            echo("</tr>");
            echo("<br>");
                $filas=0;
                $cont=0;
                //Recorro filas
                foreach ($liga as $nombre => $valor) {
                    echo("<tr>");
                    # code...
                    echo("<td>");
                    echo ($nombre);
                    echo("</td>");
                    //Recorro valores
                    foreach($valor as $puntos =>$nombre){
                        if($filas==$cont){
                            echo("<td></td>");       
                        }
                        echo("<td>");

                        $cont++;
                            //Puntos de cada equipo
                            foreach ($nombre as $clave => $valor) {
                                # code...
                                
                                if($clave=="Resultado"){
                                    echo "<p>";
                                    echo($valor);
                                    echo "</p>";
                                }
                                else{                          
                                    echo($valor);                         
                                }                     
                            }                           
                        echo("</td>");
                    }
                    echo("<br>");
                    echo("</tr>");
                    $cont=0;
                    $filas++;
                }
        ?>  
    </table> 
    
    <br>
    <br>
    
    <?php
        $ciudades=array();
            //Creación de array de ciudades
            foreach ($liga as $key => $value) {
                # code...
                array_push($ciudades,$key);
                //echo($key);
                foreach($value as $puntos =>$nombre){
                    //puntos
                    foreach ($nombre as $clave => $valor) {
                        echo($valor);
                        if($clave=="Resultado"){                        
                        }
                    }
                }
            }                 
            //Primera fila
            foreach ($ciudades as $ciudad => $valor) {
                # code...
                echo($valor);
                    
            }
        ?>
    <table>
        <tr>
            <td>EQUIPO</td>
            <td>PUNTOS</td>
            <td>GOLES A FAVOR</td>
            <td>GOLES EN CONTRA</td>
        </tr>
        <!-- <tr>
            
        </tr>            -->
    </table>
</body>
</html>