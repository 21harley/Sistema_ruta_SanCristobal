<?php
include(dirname(dirname(__FILE__)) . '/Modelo/ConexionDB.php');

class ModeloSugerencias{
    
    private $conexionDB;

    public function __construct(){
    }
    
    public function selectSugerencias(){
        $this->conexionDB= new ConexionDB();
        $resp=$this->conexionDB->query("SELECT * FROM `criticas_sugerencias`");
        $this->conexionDB->close();
        return $resp;
    }
    
    public function insertSugerencia($nombre,$apellido,$correo,$telefono,$empresa,$fechaCreacion,$mensaje){
        $this->conexionDB= new ConexionDB();
        $resp=$this->conexionDB->query("INSERT INTO `criticas_sugerencias`( `nombre`, `apellido`, `correo`, `telefono`, `id_empresa`, `fecha_creacion`, `mensaje`) VALUES ('$nombre','$apellido','$correo','$telefono','$empresa','$fechaCreacion','$mensaje')");
        $this->conexionDB->close();
        return $resp;
    }

}