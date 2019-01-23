<?php include_once 'backend/conexion.php'; ?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/css/font-awesome.min.css">

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="frontend/css/estilos.css">

    <!-- Fuente -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <title>Organizador de tareas</title>
  </head>
  <body>
    <h1>ORGANIZADOR DE TAREAS</h1>
    <div class="container mt-5">
      <div class="row">

        <!-- Formulario-->
        <div class="col-xl-6">

          <?php if(!$_GET): ?>
          <!-- Formulario agregar tareas -->
          <h2 class="t-agregar">AGREGAR TAREA</h2> <br>
          <form method="POST" action="backend\agregar.php">
            <input type="text" class="form-control" name="titulo">
            <input type="text" class="form-control mt-3" name="descripcion">
            <button class="btn btn-primary mt-3" name="button">Agregar</button>
          </form>
          <?php endif ?>

          <!-- Formulario agregar tareas -->
          <?php include 'backend\obtenerid.php'; if($_GET): ?>

          <h2 class="t-editar">MODIFICAR TAREA</h2>
          <form method="GET" action="backend\editar.php">
            <input type="text" class="form-control" name="titulo"
             value="<?php echo $resultado_unico['titulo']; ?>">
            <input type="text" class="form-control mt-3" name="descripcion"
             value="<?php echo $resultado_unico['descripcion'] ?>">
             <input type="hidden" name="id" value="<?php echo $resultado_unico['id'] ?>">
            <button class="btn btn-primary mt-3" name="button">Actualizar</button>
          </form>

        <div class="ctn-regresar">
          <a class="regresar" href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i>
          <span> Regresar a agregar tarea</span>
          </a>
        </div>

          <?php endif ?>

        </div>

        <!-- Listar tareas -->
        <div class="col-md-6 mt-3 flexible">
          <h3>Listado de tareas</h3><br>
          <?php include 'backend/leer.php'; foreach ($resultado as $dato): ?>
            <div class="row-xl-3 alert alert-info <?php  echo $dato ['titulo']?>" role="alert">
              <?php  echo $dato ['titulo']?>
              -
              <?php  echo $dato ['descripcion']?>

              <!-- Icono Eliminar -->
              <a href="backend\eliminar.php?id=<?php  echo $dato ['id']?>" class="float-right ml-3" title="Eliminar">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                <span> Eliminar </span>
              </a>

              <!-- Icono Editar -->
              <a href="index.php?id=<?php  echo $dato ['id']?>" class="float-right" title="Editar">
                <i class="fa fa-pencil prueba" aria-hidden="true"></i>
                <span> Editar </span>
              </a>

            </div>
            <?php endforeach ?>
        </div>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
