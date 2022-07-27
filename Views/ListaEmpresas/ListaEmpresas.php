<!DOCTYPE html>
<html lang="en">
<head>
<?php include(dirname(dirname(__FILE__)) . '/Components/Header/Header.php');?>
    <title>Lista de Empresas</title>
</head>
<body>
   <?php include(dirname(dirname(__FILE__)) . '/Components/Navegador/Nav.php');?>
   <main>
     <h1>Lista de Empresas</h1>
     <div>
        <ul>
            <?php
              include "..\..\Controller\ControllerEmpresa.php";
              $consulta= new ControllerEmpresa();
              $resp=$consulta->getEmpresas();
              echo json_encode($resp);
              foreach($resp as $item) {
                echo "<li> Nombre:".$item['nombre']."<br/> Correo:".$item['correo']." </li>";
              }
            ?>
        </ul>
     </div>
   </main>
</body>
</html>