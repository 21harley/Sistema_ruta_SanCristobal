<!DOCTYPE html>
<html lang="en">
<head>
    <?php include(dirname(dirname(__FILE__)) . '/Components/Header/Header.php');?>
    <title>Home</title>
    <link rel="stylesheet" href="public/css/Home.css?v=<?php echo time(); ?>'>">
</head>
<body class="Home">
    <?php include(dirname(dirname(__FILE__)) . '/Components/Navegador/Nav.php');?>
    <main>
       <?php
         if(isset($_SESSION['user'])){
            echo "<h1>Bienvenido".$_SESSION['dataUser']['nombre']."</h1>";
         }else{
            echo "<h1>Bienvenido a rutas Cristobal</h1>";
         }
       ?>
       <div class='main-content'>
          <div class='main-content__one'>
           <figcaption class='main-content__figcaption'>
              <img class='main-content__img' src="https://upload.wikimedia.org/wikipedia/commons/0/01/Flag_of_T%C3%A1chira.svg" alt="logo">
           </figcaption>
          </div>
          <div class='main-content__two'>
            <p class='main-content__p' >
            San Cristóbal es una ciudad venezolana, capital del Estado Táchira y del Municipio San Cristóbal ubicada en la Región de los Andes al suroeste de Venezuela. Está ubicada a 57 kilómetros de la frontera con Colombia. La ciudad es apodada La Ciudad de la Cordialidad.
            </p>
          </div>
       </div>
    </main>
</body>
</html>