<?php

include_once 'conexion.php';

if ($_POST) {
  $color = $_POST['titulo'];
  $descripcion = $_POST['descripcion'];

  $sql_agregar = 'INSERT INTO tareas (titulo,descripcion) VALUES (?,?)';
  $sentencia_agregar = $pdo->prepare($sql_agregar);
  $sentencia_agregar -> execute(array($color,$descripcion));

  // cierre conexion base de datos y sentencia
  $sentencia_agregar =  null;
  $pdo = null;

  header ('location:../index.php'); //una vez se ejecute el codigo, redirigir a pagina de inicio
}
