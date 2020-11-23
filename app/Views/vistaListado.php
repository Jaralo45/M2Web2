<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="https://img.icons8.com/fluent/100/000000/cat-footprint.png">
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/style.css")) ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand text-success" href="<?php echo(base_url("public/")) ?>">HUELLITAS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#registro" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo(base_url("public/")) ?>">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<div class="container fondo-listado bg-secondary pl-5 rounded">
    <div class="titulo-listado mt-5 pt-5 ml-5">
        <img src="<?php echo(base_url("public/img/listadoanimales.jpeg")) ?>" height="250px" width="90%" alt="Listado de Animales">
    </div>

    <h4><?php session('mensaje') ?></h4>
    <?php  if(session('mensaje')):?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo(session('mensaje')) ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php endif ?>                   

    <div class="row row-cols-1 row-cols-md-4 mt-5">
        <?php foreach($animales as $animal):?>

            <div class="col mb-4 mt-3">
                <div class="card h-100">
                    <img src="<?= $animal["foto"] ?>" class="card-img-top" height="220px" width="200px" alt="IMAGEN">
                    <div class="card-body">
                        <h5 class="card-title">Nombre: <?= $animal["nombre"]?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Edad: <?= $animal["edad"]?> años</h6>
                        <p class="card-text">Descripción: <?= $animal["descripcion"]?></p>
                        <p class="card-text">
                            <?php 
                                if($animal["tipoanimal"]==0){
                                    echo("Tipo Animal: NO APLICA");
                                }else if($animal["tipoanimal"]==1){
                                    echo("Tipo Animal: Doméstico");
                                }else if($animal["tipoanimal"]==2){
                                    echo("Tipo Animal: Fauna Silvestre");
                                }
                            ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo(base_url("public/animales/eliminar/".$animal["id"])) ?>" class="btn btn-outline-danger">Eliminar</a>
                        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#editar<?php echo($animal["id"])?>">
                            Editar
                        </button>
                    </div>
                </div>
                 <!-- ventana modal con formulario -->
            <div class="modal fade" id="editar<?php echo($animal["id"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header bg-dark text-light">
                                <h5 class="modal-title" id="exampleModalLabel">Edición de Animal</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body form-registro text-light">
                                <form action="<?php echo(base_url("public/animales/editar/".$animal["id"]))?>" method="POST">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text" class="form-control" value="<?= $animal["nombre"] ?>" name="nombreEditar">
                                    </div>
                                    <div class="form-group">
                                        <label>Edad:</label>
                                        <input type="number" class="form-control" value="<?= $animal["edad"] ?>" name="edadEditar">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripcion:</label>
                                            <input class="form-control" type="text" name="descripcionEditar" value="<?= $animal["descripcion"] ?>">
                                    </div>
                                    <div class="modal-footer">
                                            <a type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Enviar</button>
                                    </div>
                                        
                                </form>
                            </div>
                    </div>
                </div>
            </div>
            </div>

        <?php endforeach?>
    </div>
       
</div>
<footer class="mt-5">
    <div class="row bg-light p-5">
    <div class="col-4">
        <img src="<?php echo(base_url("public/img/huellitas.jpeg")) ?>"class="ml-5 mt-5 rounded" height="80px" width="200px" alt="Huellitas">
        <div class="ml-5 mt-3">
        <a href=""><p class="text-dark">Sobre nosotros</p></a>
        <a href=""><p class="text-dark">Fundación</p></a>
        <a href=""><p class="text-dark">Donaciones</p></a>
        </div>
    </div>
    <div class="col-3 mt-5">
        <h3 class="text-secondary">Redes Sociales</h3>
        <div class="images mt-5">
        <a href="https://www.facebook.com/javier.r.carmona.3/"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/></a>
        <a href="https://www.linkedin.com/in/javier-ramirez-043b06b6/"><img src="https://img.icons8.com/color/48/000000/linkedin.png"/></a>
        <a href="https://github.com/"><img src="https://img.icons8.com/ios-glyphs/48/000000/github.png"/></a>
        </div>
    </div>
    <div class="col-5">
        <video controls src="<?php echo(base_url("public/img/perrito.mp4")) ?>" height="300px" width="450px"></video>
    </div>
    </div>
    <div class="row appweb bg-light text-secondary justify-content-center p-3">
    Appweb. Realizado por Javier Ramirez C. <?php echo date("Y");?>. &reg; Todos los derechos reservados
    </div>
</footer>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
