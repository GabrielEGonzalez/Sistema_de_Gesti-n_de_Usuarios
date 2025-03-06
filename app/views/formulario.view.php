<?php require_once 'C:\xampp\htdocs\sistemaGestionUsuario\Sistema_de_Gesti-n_de_Usuarios\app\config\config.php'; ?>
<!-- C:\xampp\htdocs\sistemaGestionUsuario\Sistema_de_Gesti-n_de_Usuarios\app\config\config.php -->
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
        font-family: 'Courier New', Courier, monospace;
        
    }

    body {
        background-color: burlywood;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 1rem;
        background-color: bisque;
        border-radius: 20px;
        border: 3px solid black;
    }

    .cont {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    label {
        padding: .2rem;
        font-weight: 800;
        font-size: 1rem;
    }

    input {
        padding: 2px 2px;
        border-bottom: 2px black solid;
    }

    .button {
        padding: .4em 2rem;
        background-color: green;
        font-weight: 800;
        border: 2px solid black;
        border-radius: 15px;
    }
    </style>
</head>

<body>
    <form action="<?php BASE_URL ?>public/iniciar/" method="post">
        <div class="cont">
            <label for="mail">
                email:
            </label>
            <input type="email" name="mail" id="mailtxt" required>
        </div>
        <div class="cont">
            <label for="password">
                Contraseña:
            </label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="cont"><input type="submit" value="enviar" class="button"></div>

    </form>
</body>

</html>