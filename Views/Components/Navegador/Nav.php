<?php
    session_start();
?>
<nav class="header-nav">
    <div class="position__menu-active">
        <button id="menu-active">Menu</button>
    </div>
     <ul class="header-nav__ul">
        <?php
          
          if(!isset($_SESSION['user'])){
            echo '<li class="header-nav__li"><a href="../Login/Login.php" class="header-nav__a">Login</a></li>';
          }
        ?>
        <li class="header-nav__li">
            <a href="../Home/Home.php" class="header-nav__a">Home</a>
        </li>
        <li class="header-nav__li">
            <a href="../ListaRuta/ListaRuta.php" class="header-nav__a">Lista de Rutas</a>
        </li>
        <li class="header-nav__li">
            <a href="../ListaEmpresas/ListaEmpresas.php" class="header-nav__a">Lista de Empresas</a>
        </li>
        <li class="header-nav__li">
            <a href="../Sugerencias/Sugerencias.php" class="header-nav__a">Sugerencias</a>
        </li>
        <?php

          if(isset($_SESSION['user'])){

            if($_SESSION['user']=='1' || $_SESSION['user']=='2'){
             echo "<li class='header-nav__li'><a href='../RegistrarVehiculo/RegistrarVehiculo.php' class='header-nav__a'>Registrar vehiculo</a></li>";
             echo "<li class='header-nav__li'><a href='../ListaSugerencia/ListaSugerencia.php' class='header-nav__a'>Lista Sugerencia</a></li>";
            }
            
            if($_SESSION['user']=='1'){
                echo "<li class='header-nav__li'><a href='../RegistrarUsuario/RegistrarUsuario.php' class='header-nav__a'>Registrar usuario</a></li>";
                echo "<li class='header-nav__li'><a href='../RegistrarEmpresa/RegistrarEmpresa.php' class='header-nav__a'>Registrar empresa</a></li>";
                echo "<li class='header-nav__li'><a href='../RegistrarLugarRuta/RegistrarLugarRuta.php' class='header-nav__a'>Registrar lugarRuta</a></li>";               
            }
            
            echo "<li class='header-nav__li'><a href='../Clouse/Clouse.php' class='header-nav__a'>Cerrar seccion</a></li>"; 
          }

        ?>
    </ul>
</nav>
<script src="../../../ProyectoRutas/public/js/functions/menu.js"></script>