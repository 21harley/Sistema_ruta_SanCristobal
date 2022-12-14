
<!DOCTYPE html>
<html lang="en">
<head>
<?php include(dirname(dirname(__FILE__)) . '/Components/Header/Header.php');?>
    <title>Login</title>
    <link rel="stylesheet" href="public/css/Login.css?v=<?php echo time(); ?>'>">
</head>
<body>
    <?php include(dirname(dirname(__FILE__)) . '/Components/Navegador/Nav.php');?>
    <?php
        if(isset($_SESSION['user'])){
            $url="Location: ../../Views/Home/Home.php";
            header($url);
        }
    ?>
    <main>
        <div class="logo">
            <figure>
                <img src="../../public/svg/Logo.svg" alt="Logo">
            </figure>
            <h1>Sistemas Rutas</h1>
        </div>
        <form method="post" class="form-login" >
        <h1>Login</h1>
        <label class="form-login__label"  for="email">
            <span>Correo:</span><input type="email" name="email">
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