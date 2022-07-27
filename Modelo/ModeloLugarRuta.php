<?php
include(dirname(dirname(__FILE__)) . '/Modelo/ConexionDB.php');

class ModeloLugarRuta{
    
    private $conexionDB;

    public function __construct(){
    }
    
    public function selectLugarRutas(){
        $this->conexionDB= new ConexionDB();
        $resp=$this->conexionDB->query("SELECT * FROM `lugar_ruta`");
        $this->conexionDB->close();
        return $resp;
    }
    

}