<?php
    require_once("config.php");
    require_once("controlador/ProductoController.php");
    $prodController = new ProductoController();
    if (isset($_GET['m'])){
        $metodo = $_GET['m'];
        if(method_exists('ProductoController',$metodo))
            //$metodo es una variable que contiene el nombre del método que se desea llamar.
            $prodController->{$metodo}();
    }
    else    
        $prodController->listar();
?>