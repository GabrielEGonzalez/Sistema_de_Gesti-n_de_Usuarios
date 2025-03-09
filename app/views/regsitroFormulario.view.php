<?php 
    require_once __DIR__ . '/../config/config.php';


/* if (!isset($_SESSION['usuario'])) {
    // Redirige al usuario a la página de login
    header('Location: http://localhost/sistemaGestionUsuario/Sistema_de_Gesti-n_de_Usuarios/');
    exit(); // Asegúrate de detener la ejecución del script
} */

    $rol = isset($_SESSION['usuario']['rol']) ? $_SESSION['usuario']['rol']: NULL ;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    h1 {
        font-size: 1.4em;
    }

    p {
        font-size: .8em;
        margin-top: .3rem;
        color: rgba(61, 60, 60, 0.582);
    }

    body {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .con {
        background-color: azure;
        padding: 2rem;
        border: 1px solid rgba(61, 60, 60, 0.582);
        border-radius: 8px;
    }

    .ConN {
        display: flex;
        flex-direction: column;
        font-size: .8em;
    }


    input {
        padding: .4rem;
        border: 1px solid rgba(61, 60, 60, 0.582);
        border-radius: 5px;
    }

    input[type='submit'] {
        margin-top: 1rem;
        background-color: black;
        color: white;
    }

    input[type='submit']:hover {
        background-color: rgb(26, 25, 25);
    }

    select {
        padding: .4rem;
    }

    label {
        padding: .8rem 0;
        font-weight: 500;
    }
    </style>
</head>

<body>
    <main class="con">
        <div class="con-1">
            <h1>Registro de Usuario</h1>
            <p>Complete el formulario para craer una nueva cuenta.</p>
        </div>

        <div class="con-2">
            <form action="<?php BASE_URL ?>/public/Registrar" method="post">
                <div class="ConN">
                    <label for="Nombre">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" placeholder="Ingrese su nombre">
                </div>

                <div class="ConN">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" id="Email" placeholder="correo@ejemplo.com">
                </div>

                <div class="ConN">
                    <label for="password">Contraseña</label>
                    <input type="password" name="Nombre" id="Nombre" placeholder="•••••••••">
                </div>

                <div class="ConN">
                    <label for="Nombre">Rol</label>
                    <select name="Rol" id="rol">
                        <option value="null">Seleccione su Rol</option>

                        <option value="Administrador">Administrador</option>

                        <option value="Editor">Editor</option>
                        <option value="Usuario Regular">Usuario Regular</option>

                    </select>
                </div>

                <div class="ConN">
                    <input type="submit" value="Registrar Usuario" class="button">
                </div>
            </form>
        </div>
    </main>
</body>

</html>