<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: index.html");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
<main>
    <div class="contenedor-todo">
        <div class="caja-trasera">
            <div class="caja-trasera-login">
                <h3>¿Ya tienes una cueta?</h3>
                <p> Inicia Sesion para ver todo lo que tenemos </p>
                <button id="btn-iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja-trasera-register">
                <h3>¿Aún no tines una cuenta?</h3>
                <p>Registrate para que puedas inicar sesión</p>
                <button id="btn-registrarse">Registrarse</button>
            </div>
        </div>

        <div class="contenedor-login-register">
            <form action="login_verificar.php" method ="POST" class="formulario-login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electronico" name="correo" required>
                <input type="password" placeholder="Contraseña" name="contrasena" required>
                <button>Entrar</button>
            </form>

            <form action="registro.php" method ="POST" class="formulario-register" >
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                <input type="text" placeholder="Correo Electronico" name="correo" required>
                <input type="text" placeholder="Usuario" name="usuario" required>
                <input type="password" placeholder="Contraseña" name="contrasena" required>
                <button>Registrarse</button>
            </form>

        </div>
    </div>
</main>
<script src="login.js"></script>
</body>
</html>
