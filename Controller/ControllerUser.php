<?php
include(dirname(dirname(__FILE__)) . '/Modelo/ModeloUser.php');

class ControllerUser{
    
    private $user;

    public function __construct(){
        $this->user= new ModeloUser();
    }
    
    public function getUser(){
        $resp=$this->user->selectUser();
        return $resp;
    }
    
}