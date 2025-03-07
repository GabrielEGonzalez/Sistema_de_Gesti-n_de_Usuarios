<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <main class="con">
        <div class="con-1">
            <h1>Registro de Usuario</h1>
            <p>Complete el formulario para craer una nueva cuenta.</p>
        </div>

        <div class="con-2">
            <form action="/" method="post">
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