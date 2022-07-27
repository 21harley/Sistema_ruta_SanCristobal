<?php
include(dirname(dirname(__FILE__)) . '/Modelo/ConexionDB.php');

class ModeloVehiculo{
    
    private $conexionDB;

    public function __construct(){
    }
    
    public function selectVehiculos(){
        $this->conexionDB= new ConexionDB();
        $resp=$this->conexionDB->query("SELECT * FROM `vehiculo_publico`");
        $this->conexionDB->close();
        return $resp;
    }
    

}