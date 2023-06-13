<?php 

    class Producto extends Conectar{
        public function get_producto(){
           $conectar = parent::conexion();
           parent::set_names();
           $sql="SELECT * FROM tm_producto";
           $sql=$conectar->prepare($sql);
           $sql->execute();
           return $resultado=$sql->fetchAll(); 
        }
        public function get_producto_x_id($id_product){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM product WHERE id_product = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id_product);
            $sql->execute();
            return $resultado=$sql->fetchAll(); 
         }
    }
?>