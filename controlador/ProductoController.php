<?php
    require_once("modelo/Producto.php");
    class ProductoController{
        private $modelo;

        function __construct(){
            $this->modelo = new Producto();
        }

        // Mostrar productos
        public function listar(){
            $producto = new Producto();
            $dato = $producto->listado();
            require_once("vista/producto_view.php");
        }

        // Insertar productos
        public function nuevo(){
            require_once("vista/nuevo_prod.php");
        }

        public function guardar(){
            $nombre = $_REQUEST['nombre'];
            $precio = $_REQUEST['precio'];
            $data = "'".$nombre."',".$precio;
            $producto = new Producto();
            $nuevo = $producto->insertar($data);
            header("location:".url_sitio);
        }

        // Actualizar productos
        public function editar(){
            $id = $_REQUEST['id'];
            $cond = "id=".$id;
            $producto = new Producto();
            $dato = $producto->mostrar($cond);
            require_once("vista/producto_edit.php");
        }        

        public function update(){
            $nombre = $_REQUEST['nombre'];
            $precio = $_REQUEST['precio'];
            $id = $_REQUEST['id'];
            $cond = "id=".$id;
            $data = "nombre='".$nombre."', precio=".$precio;
            $producto = new Producto();
            $nuevo = $producto->actualizar($data,$cond);
            header("location:".url_sitio);
        }

        // Eliminar productos
        public function eliminar(){
            $id = $_REQUEST['id'];
            $cond = "id=".$id;
            $producto = new Producto();
            $dato = $producto->eliminar($cond);
            header("location:".url_sitio);
        }


    }
?>