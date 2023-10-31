<?php
    class Producto{
        private $productos;
        private $db;

        // constructor
        public function __construct() {
            $this->productos = array();
            $this->db = new PDO('mysql:host=localhost;dbname=poo_mvc','root','');
        }

        //funciones miembro
        // funcion para listar todos los registros de la tabla productos
        public function listado(){
            $sql = "select * from productos";
            $res = $this->db->query($sql);
            while ($fila = $res->FETCHALL(PDO::FETCH_ASSOC)){
                $this->productos[] = $fila;
            }
            return $this->productos;
        }

        // funcion para insertar un producto nuevo
        public function insertar($data){
            $sql = "insert into productos values(null,".$data.")";
            $res = $this->db->query($sql);
            if($res)
                return true;
            else
                return false;
        }

        // funcion para mostrar un prodUcto segun $cond
        public function mostrar($cond){
            $sql = "select * from productos where ".$cond;
            $res = $this->db->query($sql);
            while ($fila = $res->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->productos[] = $fila;
            }
            return $this->productos;
        }

        // funcion para actualizar un producto segun $cond
        public function actualizar($data, $cond){
            $sql = "update productos set ".$data." where ".$cond;
            echo $sql;
            $res = $this->db->query($sql);
            if($res)
                return true;
            else    
                return false;
        }

        // funcion para eliminar un producto segun $cond
        public function eliminar($cond){
            $sql = "delete from productos where ".$cond;
            $res = $this->db->query($sql);
            if($res){
                echo "<script languaje='JavaScript'>
                    alert('Los datos se eliminaron correctamente de la BD');
                    location.assign('index.php');
                    </script>";
                return true;
            }else {
                echo "<script languaje='JavaScript'>
                    alert('Los datos NO se eliminaron de la BD');
                    location.assign('index.php');
                    </script>";
                return false;
            }            
        }
    }
?>