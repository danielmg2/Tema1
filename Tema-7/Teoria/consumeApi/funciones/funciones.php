<?
    require_once '../peticiones/curl.php';



function cargarConciertos(){
    $lista =get();
    $lista = json_decode($lista);
    foreach($lista as $value){
        echo "<option value =".$value["id"].">".$value['grupo'].$value['id'];
    }


}

?>