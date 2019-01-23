<?php
include_once 'conexion.php';

$sql_leer = 'SELECT * FROM tareas';
$sentencia_leer = $pdo->prepare($sql_leer);
$sentencia_leer -> execute();
$resultado = $sentencia_leer->fetchAll();

// cierre conexion base de datos y sentencia
$pdo = null;
$sentencia_leer = null;
