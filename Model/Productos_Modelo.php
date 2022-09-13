<?php

Class Productos_Model{

    private $db;

    Private $productos;

    public function __construct(){
        
        require_once('Conexion.php');

        $this->db=Conectar::Conexion();

        $this->productos=array();
    }

    Public function get_Productos(){

        $consulta=$this->db->query('SELECT * FROM PRODUCTOS');
        
        while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

            $this->productos[]=$filas;

        }
        
        return $this->productos;
    }

}


?>
