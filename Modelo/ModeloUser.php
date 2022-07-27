<?php
include(dirname(dirname(__FILE__)) . '/Modelo/ConexionDB.php');

class ModeloUser{
    
    private $conexionDB;

    public function __construct(){
    }
    
    public function selectUsers(){
        $this->conexionDB= new ConexionDB();
        $resp=$this->conexionDB->query("SELECT * FROM `users`");
        $this->conexionDB->close();
        return $resp;
    }
    
    public function selectUser($correo,$clave){
        $this->conexionDB= new ConexionDB();
        $resp=$this->conexionDB->query("SELECT * FROM `users` where correo=$correo and clave=$clave")->fetch_array(MYSQLI_ASSOC);
        $this->conexionDB->close();
        return $resp;
    }

}