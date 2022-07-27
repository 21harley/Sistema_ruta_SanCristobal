<?php
include(dirname(dirname(__FILE__)) . '/Modelo/ConexionDB.php');

class ModeloEmpresa{
    
    private $conexionDB;

    public function __construct(){
    }
    
    public function selectEmpresa(){
        $this->conexionDB= new ConexionDB();
        $resp=$this->conexionDB->query("SELECT * FROM `empresa`");
        $this->conexionDB->close();
        return $resp;
    }
    

}