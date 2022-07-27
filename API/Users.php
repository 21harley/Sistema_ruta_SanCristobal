<?php

$resp=[];

if(isset($_POST["consulta"])&&isset($_POST["nombre"])){
    
    $consulta=$_POST["consulta"];

    switch($consulta){
        case '1':
           $resp["data"]=[
            "resp"=>"Hola mundo",
            "state"=>200,
            "mensaje"=>"Ho"
           ]; 
           echo json_encode($resp); 
           return;   
        break;
        default:
            $resp["data"]=[
            "resp"=>"Hola mundo",
            "state"=>404,
            "mensaje"=>"la ruta no se encontro"
           ]; 
            echo json_encode($resp); 
           return;   
        break;
    }
    
    echo json_encode($resp); 
    return;   
}

echo  json_encode($resp); 
return;   
