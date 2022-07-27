<?php
include(dirname(dirname(__FILE__)) . '/Modelo/ConexionDB.php');

class ModeloUser{
    
    private $conexionDB;

    public function __construct(){
    }
    
    public function selectUser(){
        $this->conexionDB= new ConexionDB();
        $resp=$this->conexionDB->query("SELECT * FROM `users`")->fetch_array(MYSQLI_ASSOC);
        $this->conexionDB->close();
        return $resp;
    }
    

    public function closeConexion(){
        $this->conexionDB->close();
    }
}