<?php

include_once 'conexion.php';

if ($_GET) {
  $id = $_GET['id'];
  $sql_unico = 'SELECT * FROM tareas WHERE id=? ';
  $sentencia_unico = $pdo->prepare($sql_unico);
  $sentencia_unico -> execute(array($id));
  $resultado_unico = $sentencia_unico->fetch();
}
