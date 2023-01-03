<?php 



if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
    echo "¡Hola {$_POST['nombre']}";
}else{
    echo "No mandaste nada";
}




echo "</pre>";

?>