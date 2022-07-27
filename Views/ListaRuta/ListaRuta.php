<!DOCTYPE html>
<html lang="en">
<head>
<?php include(dirname(dirname(__FILE__)) . '/Components/Header/Header.php');?>
    <title>Lista de Rutas</title>
</head>
<body>
   <?php include(dirname(dirname(__FILE__)) . '/Components/Navegador/Nav.php');?>
   <main>
     <h1>Lista de Rutas</h1>
     <div>
        <ul>
            <?php
              include "..\..\Controller\controllerVehiculo.php";
              $consulta= new ControllerVehiculo();
              $resp=$consulta->getVehiculos();
              echo json_encode($resp);
            ?>
        </ul>
     </div>
   </main>
</body>
</html>