<?php
include(dirname(dirname(__FILE__)) . '/Modelo/ModeloUser.php');

class ControllerUser{
    
    private $user;

    public function __construct(){
        $this->user= new ModeloUser();
    }
    
    public function getUsers(){
        $resp=$this->user->selectUsers();
        $rows=[];
        while($row = $resp->fetch_array())
        {
            $rows[] = $row;
        }
        return $rows;
    }

    public function getUser($correo,$clave){
        $resp=$this->user->selectUsers($correo,$clave);
        return $resp;
    }
    
}