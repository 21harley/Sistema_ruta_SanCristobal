<?php
include(dirname(dirname(__FILE__)) . '/Controller/ControllerUser.php');

$resp=[];

if(isset($_POST["query"])){
    
    $consulta=$_POST["query"];

    switch($consulta){
        case 'login/user':
            try{
                $userController= new ControllerUser();
                $user=$userController->getUser($_POST['email'],$_POST['clave']);
                if($user){
                    session_start();
                    $_SESSION['user']=$user['id_tipo_user'];
                    $_SESSION['dataUser']=$user;
                    $resp["data"]=[
                        "resp"=>"se creo seccion",
                        "state"=>200,
                        "mensaje"=>"Bienvenido"
                       ]; 
                    echo json_encode($resp); 
                    return;  
                } 
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
