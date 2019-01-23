<?php

$id = $_GET['id'];
$titulo = $_GET['titulo'];
$descripcion = $_GET['descripcion'];

include_once 'conexion.php';

$sql_editar = 'UPDATE tareas SET titulo=?, descripcion=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar -> execute(array($titulo,$descripcion,$id));

$pdo = null;
$sentencia_eliminar = null;

header ('location:../index.php'); //una vez se ejecute el codigo, redirigir a pagina de inicio
?>
