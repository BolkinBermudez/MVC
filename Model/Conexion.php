<?php

Class Conectar{

    public static function Conexion(){

        try{
            $conexion= new PDO ('mysql:host=localhost; dbname=repaso_mvc','root','');

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $conexion->exec('SET CHARACTER SET UTF8');

        }catch(Exception $e){
            die('Error ' . $e->getMessage());

            echo('Linea del Error'). $e->getLine();
        }

        return $conexion;
    }

}

?>