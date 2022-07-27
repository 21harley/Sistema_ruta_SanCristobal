<!DOCTYPE html>
<html lang="en">
<head>
<?php include(dirname(dirname(__FILE__)) . '/Components/Header/Header.php');?>
    <title>Registrar empresa</title>
</head>
<body>
   <?php include(dirname(dirname(__FILE__)) . '/Components/Navegador/Nav.php');?>
   <?php
        if(!isset($_SESSION['user'])){
            $url="Location: ../../Views/Home/Home.php";
            header($url);
        }
    ?>
    <main>
     <h1>Lista de Empresas</h1>
     <div>
        <ul>
            <?php
              include "..\..\Controller\controllerEmpresas.php";
              $consulta= new ControllerEmpresas();
              $resp=$consulta->getEmpresas();
              echo json_encode($resp);
            ?>
        </ul>
     </div>
   </main>
</body>
</html>