<?php
// index.php
$url="Location: Views/Home/Home.php";
header($url);
die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/index.css">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo :v</h1>
    <!--
    <nav>
        <ul>
            <li>
                <a href="Views/Home/Home.php">Home</a>
            </li>
            <li>
                <a href="Views/Login/Login.php">Login</a>
            </li>
        </ul>
    </nav>
    -->
    <?php 
    //include(dirname(dirname(__FILE__)) . '/Views/Components/Navegador/Nav.php');
    //require_once __DIR__."/Views/Components/Navegador/Nav.php";
     ?>
    <?php
     /*
     include "Modelo\ConexionDB.php";
       $consulta= new ConexionDB("localhost",'root','','rutas');
       $result=$consulta->query("SELECT * FROM `users`;");
       $resp=$result->fetch_array(MYSQLI_ASSOC);
       echo json_encode(["dato1"=>$resp,"dato2"=>$consulta->getStatus()]);
       $consulta->close();
       */
       
        include "Controller\controllerUser.php";
       $consulta= new ControllerUser();
       $resp=$consulta->getUser();
       echo json_encode($resp);
       //echo "Location:".dirname(__FILE__)."/Views/Home/Home.php";
       
    ?>
</body>
</html>