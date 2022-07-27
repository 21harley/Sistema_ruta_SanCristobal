<?php

include(dirname(dirname(__FILE__)) . '/Modelo/ModeloEmpresa.php');

class ControllerEmpresa{
    
    private $Empresa;

    public function __construct(){
        $this->Empresa= new ModeloEmpresa();
    }
    
    public function getEmpresas(){
        $resp=$this->Empresa->selectEmpresa();
        $rows=[];
        while($row = $resp->fetch_array())
        {
            $rows[] = $row;
        }
        return $rows;
    }

}