<?php 

class ConexionDB extends mysqli{
    private $host="localhost";
    private $user="root";
    private $password="";
    private $DBuser="rutas";
    private $port=9090;
    private $conxionDB;
    private $status;

    public function __construct(){
        parent::__construct($this->host, $this->user,$this->password,$this->DBuser);
        if (mysqli_connect_error()) {
            $this->conexionDB=500;
            die('Error de Conexión (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }else{
            $this->conexionDB=200;
        }                         
    }

    public function setConexion($conxionDB){
        $this->conxionDB=$conxionDB;
    }

    public function getStatus(){
        return $this->conexionDB;
    }

}