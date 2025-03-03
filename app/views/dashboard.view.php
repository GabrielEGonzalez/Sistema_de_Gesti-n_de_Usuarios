<?php
session_start();
$rol = isset($_SESSION['rol']) ? $_SESSION['rol'] : NULL;
// Datos de ejemplo para la tabla esto datos son de prueba solo para ver 

// los datos reales 
$usuarios = [
    ['id' => 1, 'usuario' => 'admin', 'rol' => 'admin'],
    ['id' => 2, 'usuario' => 'editor', 'rol' => 'editor'],
    ['id' => 3, 'usuario' => 'user', 'rol' => 'user']
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
    <?php $rol = 'admin' ?>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario['id']; ?></td>
                        <td><?php echo $usuario['usuario']; ?></td>
                        <td><?php echo $usuario['rol']; ?></td>
                        <td>
                            <?php if ($rol == 'admin'): ?>
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