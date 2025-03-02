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
</head>
<body>
    <table border="1">
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
                            <a href="editar.php?id=<?php echo $usuario['id']; ?>">Editar</a>
                            <a href="eliminar.php?id=<?php echo $usuario['id']; ?>">Eliminar</a>
                        <?php elseif ($rol == 'editor' && $usuario['rol'] != 'admin'): ?>
                            <a href="editar.php?id=<?php echo $usuario['id']; ?>">Editar</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>>
    
</body>
</html>