<?php

$mensaje = ""; 

//Cargar Usuario
if (isset($_POST['cargar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $sql = "INSERT INTO usuarios (nombre, apellido, edad) VALUES (:nombre, :apellido, :edad)";
    $query = $connect->prepare($sql);
    $query->bindParam(':nombre', $nombre);
    $query->bindParam(':apellido', $apellido);
    $query->bindParam(':edad', $edad);

    if ($query->execute()) {
        $mensaje = "Usuario cargado con éxito.";
    } else {
        $mensaje = "Error al cargar el usuario.";
    }
}


// Modificar Usuario
if (isset($_POST['modificar'])) {
    $id = $_POST['id']; 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $sql = "UPDATE usuarios SET nombre = :nombre, apellido = :apellido, edad = :edad WHERE id = :id";
    $query = $connect->prepare($sql);
    $query->bindParam(':id', $id);
    $query->bindParam(':nombre', $nombre);
    $query->bindParam(':apellido', $apellido);
    $query->bindParam(':edad', $edad);

    if ($query->execute()) {
        $mensaje = "Usuario modificado con éxito.";
    } else {
        $mensaje = "Error al modificar el usuario.";
    }
}


// Eliminar Usuario
if (isset($_POST['eliminar'])) {
    $id = $_POST['id']; 

    $sql = "DELETE FROM usuarios WHERE id = :id";
    $query = $connect->prepare($sql);
    $query->bindParam(':id', $id);

    if ($query->execute()) {
        $mensaje = "Usuario eliminado con éxito.";
    } else {
        $mensaje = "Error al eliminar el usuario.";
    }
}

// Consulta para obtener todos los usuarios
$sql = "SELECT * FROM usuarios";
$query = $connect->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);


?>