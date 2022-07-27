<?php
include(dirname(dirname(__FILE__)) . '/Controller/ControllerSugerencias.php');

$resp=[];

if(isset($_POST["query"])){
    
    $consulta=$_POST["query"];

    switch($consulta){
        case 'sugerencia/mensaje':
            try{
                $userController= new ControllerSugerencias();
                $addS=$userController->addSugerencia($_POST['nombre'],$_POST['apellido'],$_POST['correo'],$_POST['telefono'],$_POST['empresa'],date("Y-m-d H:i:s"),$_POST['mensaje']);
                $resp["data"]=[
                        "resp"=>"se creo",
                        "state"=>200,
                        "mensaje"=>$resp
                       ]; 
                echo json_encode($resp); 
                return;  
            }catch(Exception $e){
                $resp["data"]=[
                 "resp"=>"Error",
                 "state"=>500,
                 "mensaje"=>$e->getMessage(),
                 'post'=>$_POST
                ]; 
                echo json_encode($resp); 
                return;   
            }
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
