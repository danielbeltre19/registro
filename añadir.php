<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Registro de Estudiante</title>


    <link href="css.css" rel="stylesheet" type="text/css">
    <link href="css.css" rel="stylesheet" type="text/css">

</head>

<body>
    <header>


        </div>
        </div>
        </div>
        <div class="navbar navbar-dark bg-danger shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="index.php" class="navbar-brand d-flex align-items-center">

                    <strong>Inicio</strong>
                </a>

                </button>
            </div>
        </div>
    </header>


    <?php

  include 'servicio.php';
  session_start();

  if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['carrera'])) {

    $_SESSION['estudiante'] = isset($_SESSION['estudiante']) ? $_SESSION['estudiante'] : array();

    $estudiante = $_SESSION['estudiante'];

    $estudianteid = 1;

    if (isset($estudiante)) {
      $ultimoele = getLastElement($estudiante);
      $estudianteid = $ultimoele['id'] + 1;
    }


    array_push($estudiante, ['id' => $estudianteid, 'nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'], 'carrera' => $_POST['carrera']]);

    $_SESSION['estudiante'] = $estudiante;

    header("location: index.php");
    exit();
  }
  ?>

    <main role="main">

        <div class="row"></div>
        <div class="col-md-3"></div>
        <div class="col-md-6 form">

            <div class="card">
                <div class="card-header">
                    Crear Nuevo Estudiante
                </div>
                <div class="card-body">

                    <form action="añadir.php" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control " id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido"
                                placeholder="Apellido">
                        </div>

                        <div class="form-group">
                            <label>selecciona</label>
                            <select class="form-control" id="carrera" name="carrera">
                                <?php

                foreach ($carrera as $key => $text) : ?>
                                <option value="<?php echo $key; ?>"><?php echo $text; ?></option>

                                <?php endforeach; ?>

                            </select>
                            <br>
                            <center>
                                <a href=" index.php" class="btn btn-outline-secondary">Volver atras &nbsp;&nbsp;
                                    <i class="fas fa-reply-all"></i></a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-outline-success">Enviar &nbsp;&nbsp; <i
                                        class="fas fa-check"></i></button>
                            </center>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-md-3"></div>
        </div>


    </main>


    <script src="https://kit.fontawesome.com/96e239109c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

</body>

</html>