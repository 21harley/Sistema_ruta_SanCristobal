
<!DOCTYPE html>
<html lang="en">
<head>
<?php include(dirname(dirname(__FILE__)) . '/Components/Header/Header.php');?>
    <title>Registrar vehiculo</title>
</head>
<body>
   <?php include(dirname(dirname(__FILE__)) . '/Components/Navegador/Nav.php');?>
   <?php
        if(!isset($_SESSION['user'])){
            $url="Location: ../../Views/Home/Home.php";
            header($url);
        }
    ?>
</body>
</html>