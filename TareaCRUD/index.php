<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="./src/style.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  -->
</head>

<body>

    <?php
        require 'config/conn.php';
        require 'crud.php';
    ?>

    <h1>CRUD de Usuarios</h1>

    
    <?php if (!empty($mensaje)): ?>
        <div class="alerta">
            <?php echo htmlspecialchars($mensaje); ?>
        </div>
    <?php endif; ?>
    

    <main>
        <div class="container">
            <section class="formulario">
                <form action="#" method="POST">
                    <input type="hidden" name="id"> 
                    
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" placeholder="Ingresar Nombre" required>

                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" placeholder="Ingresar Apellido" required>

                    <label for="edad">Edad</label>
                    <input type="text" name="edad" placeholder="Ingresar Edad" required>


                    <input type="submit" name="cargar" value="Cargar Usuario" id="cargar">
                    <input type="submit" name="modificar" value="Modificar Usuario" id="modificar">
                    <input type="submit" name="eliminar" value="Eliminar Usuario" id="eliminar">
                </form>
            </section>

            <section class="table-container">
                <h3>Tabla Usuarios</h3>
                <table border="1">
                    <thead>
                        <tr>

                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($usuarios)): ?>
                            <?php foreach ($usuarios as $usuario): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                                    <td><?php echo htmlspecialchars($usuario['apellido']); ?></td>
                                    <td><?php echo htmlspecialchars($usuario['edad']); ?></td>
                                    <td>
                                        <button type="button" onclick="mostrarForm('<?php echo $usuario['id']; ?>', '<?php echo $usuario['nombre']; ?>', '<?php echo $usuario['apellido']; ?>', '<?php echo $usuario['edad']; ?>')">Seleccionar</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>


    <script src="./src/crud.js"></script>

</body>
</html>
