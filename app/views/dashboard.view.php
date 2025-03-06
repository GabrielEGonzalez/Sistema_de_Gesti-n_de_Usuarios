<?php
session_start();
require_once 'C:\xampp\htdocs\sistemaGestionUsuario\Sistema_de_Gesti-n_de_Usuarios\app\config\config.php'; 

// Verifica si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    // Redirige al usuario a la página de login
    header('Location: http://localhost/sistemaGestionUsuario/Sistema_de_Gesti-n_de_Usuarios/');
    exit(); // Asegúrate de detener la ejecución del script
}


$rol = isset($_SESSION['usuario']['rol']) ? $_SESSION['usuario']['rol'] : NULL;
// Datos de ejemplo para la tabla esto datos son de prueba solo para ver 

// los datos reales 
$usuarios = [
    ['id' => 1, 'nombre' => 'juanperez', 'email' => 'admin@example.com', 'rol' => 'admin'],
    ['id' => 2, 'nombre' => 'mariagarcia', 'email' => 'editor@example.com', 'rol' => 'editor'],
    ['id' => 3, 'nombre' => 'carloslopez', 'email' => 'user@example.com', 'rol' => 'user']
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <!-- Agregar enlace a Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5 con">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1>Panel de Administración</h1>
                <p>Gestiona los usuarios registrados en el sistema</p>
            </div>
            <div>
                <a href="<?php echo BASE_URL ?>public/agregar/" class="btn btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Agregar Usuario
                </a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario['id']; ?></td>
                        <td><?php echo $usuario['nombre']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td><?php echo $usuario['rol']; ?></td>
                        <td>
                            <?php if ($rol == 'Administrador'): ?>
                                <a href="editar.php?id=<?php echo $usuario['id']; ?>" class="btn btn-primary btn-sm">Editar</a>
                                <a href="eliminar.php?id=<?php echo $usuario['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            <?php elseif ($rol == 'editor' && $usuario['rol'] != 'admin'): ?>
                                <a href="editar.php?id=<?php echo $usuario['id']; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <?php elseif ($rol == 'user'): ?>
                                <span class="btn btn-secondary btn-sm disabled">Ver</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Agregar enlace a Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>