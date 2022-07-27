<?php

include(dirname(dirname(__FILE__)) . '/Modelo/ModeloVehiculo.php');

class ControllerVehiculo{
    
    private $Vehiculo;

    public function __construct(){
        $this->Vehiculo= new ModeloVehiculo();
    }
    
    public function getVehiculos(){
        $resp=$this->Vehiculo->selectVehiculos();
        $rows=[];
        while($row = $resp->fetch_array())
        {
            $rows[] = $row;
        }
        return $rows;
    }

}