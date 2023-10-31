<?php
    require_once("config.php");
    require_once("controlador/ProductoController.php");
    $prodController = new ProductoController();
    if (isset($_GET['m'])){
        $metodo = $_GET['m'];
        if(method_exists('ProductoController',$metodo))
            $prodController->{$metodo}();
    }
    else    
        $prodController->listar();
?>