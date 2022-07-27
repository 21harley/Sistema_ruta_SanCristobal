<!DOCTYPE html>
<html lang="en">
<head>
<?php include(dirname(dirname(__FILE__)) . '/Components/Header/Header.php');?>
    <title>Login</title>
    <link rel="stylesheet" href="public/css/Login.css?v=<?php echo time(); ?>'>">
</head>
<body>
    <?php include(dirname(dirname(__FILE__)) . '/Components/Navegador/Nav.php');?>
    <main>
        <div class="logo">
            <figure>
                <img src="../../public/svg/Logo.svg" alt="Logo">
            </figure>
            <h1>Sistemas Rutas</h1>
        </div>
        <form method="post" class="form-login" >
        <h1>Login</h1>
        <label class="form-login__label"  for="nombre">
            <span>Nombre:</span><input type="text" name="nombre">
        </label>
        <label class="form-login__label" for="clave">
            <span>clave:</span><input type="password" name="clave">
        </label>
        <button class="form-logo__button">Login</button>
        </form>
    </main>
    <script src="public/js/Login.js?v=<?php echo time(); ?>'>" type="module"></script>
</body>
</html>