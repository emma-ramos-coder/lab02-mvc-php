<?php
    require_once("config.php");    
    require_once("controlador/ClienteController.php");    
    $cliController = new ClienteController();
    if (isset($_GET['m'])){
        $metodo = $_GET['m'];
        if(method_exists('ClienteController',$metodo))
            $cliController->{$metodo}();
    }
    else    
        $cliController->listar();
?>