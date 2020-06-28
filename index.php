<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Registrar de Estudiante</title>


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
                <a href="#" class="navbar-brand d-flex align-items-center">

                    <strong>Inicio</strong>
                </a>
            </div>
        </div>
    </header>

    <?php

  session_start();

  $_SESSION['estudiante'] = isset($_SESSION['estudiante']) ? $_SESSION['estudiante'] : array();

  $listaestudi = $_SESSION['estudiante'];

  include 'servicio.php';

if(!empty($listaestudi)){

if(isset($_GET['carreraid'])){

$listaestudi = buscar($listaestudi,'carrera',$_GET['carreraid']);

}

}


  ?>

    <main role="main">

        <section class="jumbotron text-center">

            <div class="container">
                <h1>Registro de Estudiante</h1>

                <p><a href="añadir.php" class="btn btn-danger my-2">Crear Estudiante &nbsp;&nbsp;&nbsp; <i
                            class="fas fa-paper-plane"></i></a></p>

            </div>

        </section>

        <div class="album py-5 bg-light">
            <div class="container">



                <div style="margin-bottom: 3%;" class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <div class="btn-group">

                            <a href="index.php" class="btn btn-outline-danger">Todos &nbsp; <i
                                    class="far fa-user"></i></a>
                            <a href="index.php?carreraid=2" class="btn btn-outline-danger">Software &nbsp;<i
                                    class="fas fa-laptop-code"></i></a>
                            <a href="index.php?carreraid=3" class="btn btn-outline-danger">Seguridad &nbsp; <i
                                    class="fas fa-cloud"></i></a>
                            <a href="index.php?carreraid=7" class="btn btn-outline-danger">Sonido &nbsp;<i
                                    class="fab fa-itunes-note"></i></a>
                            <a href="index.php?carreraid=4" class="btn btn-outline-danger">Redes &nbsp; <i
                                    class="fas fa-globe-americas"></i></a>
                            <a href="index.php?carreraid=5" class="btn btn-outline-danger">Mecatronica &nbsp;<i
                                    class="fas fa-cogs"></i></a>
                            <a href="index.php?carreraid=6" class="btn btn-outline-danger">Multimedia &nbsp;<i
                                    class="fas fa-camera"></i></a>



                        </div>
                    </div>
                </div>

                <div class="row">


                    <?php if (empty($listaestudi)) : ?>
                    <h3>Ingrese un estudiante</h3>

                    <?php else : ?>

                    <?php foreach ($listaestudi as $estudiante) : ?>

                    <div class="col-md-4 ">
                        <div class="card border-danger mb-4 letra" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text"><?php echo $estudiante['nombre']  ?>
                                    <?php echo $estudiante['apellido']  ?></p>
                                <p class="card-text"><?php echo getcarrera($estudiante['carrera']); ?></p>

                                <input type="checkbox" id="exampleCheck1" name="activo" checked>
                                <label class="form-check-label " for="exampleCheck1">Activo</label>
                                <br>
                                <br>

                                <a href="editar.php?id=<?php echo $estudiante['id']; ?>" class="card-link">
                                    <span style="color: darkblue;"> &nbsp;&nbsp;<i class=" far
                                        fa-edit"></i> </span></a>

                                <a href="elim.php?id=<?php echo $estudiante['id']; ?>" class="card-link">&nbsp;&nbsp;
                                    <span style="color: red;"> <i class="far fa-trash-alt"></i></span></a>

                            </div>
                        </div>
                    </div>




                    <?php endforeach; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
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