<?php
    class Cliente{
        private $clientes;
        private $db;

        // constructor
        public function __construct() {
            $this->clientes = array();
            $this->db = new PDO('mysql:host=localhost;dbname=poo_mvc','root','');
        }

        //funciones miembro
        // funcion para listar todos los registros de la tabla clientes
        public function listado(){
            $sql = "select * from clientes";
            $res = $this->db->query($sql);
            while ($fila = $res->FETCHALL(PDO::FETCH_ASSOC)){
                $this->clientes[] = $fila;
            }
            return $this->clientes;
        }

        // funcion para insertar un cliente nuevo
        public function insertar($data){
            $sql = "insert into clientes values(null,".$data.")";
            $res = $this->db->query($sql);
            if($res)
                return true;
            else
                return false;
        }

        // funcion para mostrar un cliente segun $cond
        public function mostrar($cond){
            $sql = "select * from clientes where ".$cond;
            $res = $this->db->query($sql);
            while ($fila = $res->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->clientes[] = $fila;
            }
            return $this->clientes;
        }

        // funcion para actualizar un cliente segun $cond
        public function actualizar($data, $cond){
            $sql = "update clientes set ".$data." where ".$cond;
            echo $sql;
            $res = $this->db->query($sql);
            if($res)
                return true;
            else    
                return false;
        }

        // funcion para eliminar un cliente segun $cond
        public function eliminar($cond){
            $sql = "delete from clientes where ".$cond;
            $res = $this->db->query($sql);
            if($res){
                echo "<script languaje='JavaScript'>
                    alert('Los datos se eliminaron correctamente de la BD');
                    location.assign('indexCliente.php');
                    </script>";
                return true;
            }else {
                echo "<script languaje='JavaScript'>
                    alert('Los datos NO se eliminaron de la BD');
                    location.assign('indexCliente.php');
                    </script>";
                return false;
            }            
        }
    }
?>