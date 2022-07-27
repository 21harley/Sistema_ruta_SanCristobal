<?php
    include "..\..\Controller\ControllerEmpresa.php";
    $Empresa= new ControllerEmpresa();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include(dirname(dirname(__FILE__)) . '/Components/Header/Header.php');?>
    <title>Sugerencias</title>
    <link rel="stylesheet" href="public/css/Sugerencias.css?v=<?php echo time(); ?>'>">
</head>
<body>
   <?php include(dirname(dirname(__FILE__)) . '/Components/Navegador/Nav.php');?>
   <main>
    <h1>Formulario de Sugerencias</h1>
    <form class="form-sugerencias">
        <label for="nombre">
            Nombre: <input type="text" name='nombre' require>
        </label>
        <label for="apellido">
            Apellido: <input type="text" name='apellido' require>
        </label>
        <label for="email">
            Correo: <input type="email" name="correo" require>
        </label>
        <label for="telefono">
            Telefono: <input type="tel" name="telefono" require>
        </label>
        <label for="empresa">
            Empresa:<select name="select">
            <?php
            
            $resp=$Empresa->getEmpresas();
            //echo json_encode($resp);
            foreach($resp as $item) {
                 echo "<option value='".$item['id']."'>".$item['nombre']."</option>";
            }
            //  <option value="value3">Value 3</option>
            ?>
            </select>
        </label>
        <label for="mensaje">
            <textarea name="mensaje" id="mensaje" cols="30" rows="10" require></textarea>
        </label>
        <button>Enviar</button>
    </form>
   </main>
   <script src="public/js/Sugerencias.js?v=<?php echo time(); ?>'>" type="module"></script>
</body>
</html>