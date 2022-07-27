<?php

include(dirname(dirname(__FILE__)) . '/Modelo/ModeloLugarRuta.php');

class ControllerLugarRuta{
    
    private $LugarRuta;

    public function __construct(){
        $this->LugarRuta= new ModeloLugarRuta();
    }
    
    public function getLugarRutas(){
        $resp=$this->LugarRuta->selectLugarRutas();
        $rows=[];
        while($row = $resp->fetch_array())
        {
            $rows[] = $row;
        }
        return $rows;
    }

}