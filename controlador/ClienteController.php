<?php
    require_once("modelo/Cliente.php");
    class ClienteController{
        private $modelo;

        function __construct(){
            $this->modelo = new Cliente();
        }

        // Mostrar clientes
        public function listar(){
            $cliente = new Cliente();
            $dato = $cliente->listado();
            require_once("vista/cliente_view.php");
        }

        // Insertar cliente
        public function nuevo(){
            require_once("vista/nuevo_cli.php");
        }

        public function guardar(){
            $nomcliente = $_REQUEST['nomcliente'];
            $dircliente = $_REQUEST['dircliente'];
            $ruccliente = $_REQUEST['ruccliente'];
            $telcliente = $_REQUEST['telcliente'];
            $data = "'".$nomcliente."','".$dircliente."','".$ruccliente."','".$telcliente."'";
            $cliente = new Cliente();
            $nuevo = $cliente->insertar($data);
            header("location:".url_cliente);
        }

        // Actualizar cliente
        public function editar(){
            $id = $_REQUEST['id'];
            $cond = "id=".$id;
            $cliente = new Cliente();
            $dato = $cliente->mostrar($cond);
            require_once("vista/cliente_edit.php");
        }        

        public function update(){            
            $id = $_REQUEST['id'];
            $nomcliente = $_REQUEST['nomcliente'];
            $dircliente = $_REQUEST['dircliente'];
            $ruccliente = $_REQUEST['ruccliente'];
            $telcliente = $_REQUEST['telcliente'];
            $cond = "id=".$id;
            $data = "nomcliente='".$nomcliente."',dircliente='".$dircliente."',ruccliente='".$ruccliente."',telcliente='".$telcliente."'";
            $cliente = new Cliente();
            $nuevo = $cliente->actualizar($data,$cond);
            header("location:".url_cliente);
        }

        // Eliminar cliente
        public function eliminar(){
            $id = $_REQUEST['id'];
            $cond = "id=".$id;
            $cliente = new Cliente();
            $dato = $cliente->eliminar($cond);
            header("location:".url_cliente);
        }
    }
?>