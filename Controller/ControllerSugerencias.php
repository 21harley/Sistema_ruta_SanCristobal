<?php

include(dirname(dirname(__FILE__)) . '/Modelo/ModeloSugerencias.php');

class ControllerSugerencias{
    
    private $Sugerencias;

    public function __construct(){
        $this->Sugerencias= new ModeloSugerencias();
    }
    
    public function getSugerencias(){
        $resp=$this->Sugerencias->selectSugerencias();
        $rows=[];
        while($row = $resp->fetch_array())
        {
            $rows[] = $row;
        }
        return $rows;
    }

    public function addSugerencia($nombre,$apellido,$correo,$telefono,$empresa,$fechaCreacion,$mensaje){
        $resp=$this->Sugerencias->insertSugerencia($nombre,$apellido,$correo,$telefono,$empresa,$fechaCreacion,$mensaje);
        return $resp;
    }

}