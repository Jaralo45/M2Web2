<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogar de animales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/style.css")) ?>">
    <link rel="icon" href="https://img.icons8.com/fluent/100/000000/cat-footprint.png">
</head>
<body>
<header>
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
        <a class="nav-link" href="<?php echo(base_url("public/")) ?>" data-toggle="modal" data-target="#registro">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo(base_url("public/animales/listado")) ?>">Animales</a>
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

<!-- ventana modal con formulario -->
<div class="modal fade" id="registro" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-dark text-light">
                                    <h5 class="modal-title" id="exampleModalLabel">Registro de Animales</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="<?php echo(base_url("public/animales/registro"))?>">
                                <div class="modal-body p-5 form-registro">
                                    
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nombre del animal" name="nombre">
                                        </div>
                                        <div class="form-group">
                                          <input type="number" class="form-control" placeholder="Edad" name="edad">
                                        </div>
                                        <div class="form-group">
                                        <select class="form-control" name="tipoanimal">
                                            <option value="0">Tipo de animal</option>
                                            <option value="1">Domestico</option>
                                            <option value="2">Fauna silvestre</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Descripción" name="descripcion">
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Comida" name="comida">
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Url de la foto" name="foto">
                                        </div>
                                        
                                </div>
                                <div class="modal-footer bg-dark">
                                            <a type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Enviar</button>
                                            </div>
                                        
                                    </form>
                            </div>
                        </div>
  </div>

</header>

<main>
    <div class="container">
        <div class="row mt-5">
            <img src="<?php echo(base_url("public/img/header.jpeg")) ?>" alt="Portada" class="rounded" width="95%" height="300px">
        </div>

        <h4><?php session('mensaje') ?></h4>
        <?php  if(session('mensaje')):?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo(session('mensaje')) ?><a href="<?php echo(base_url("public/animales/listado")) ?>">Aqui</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <?php endif ?>                

        <div class="row mt-3">
            <div class="col-8 img-fauna">
                <img src="<?php echo(base_url("public/img/FaunaSilvestre.jpeg")) ?>" alt="fauna" height="430px" width="715px">
            </div>
            <div class="col-4 mt-4">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Testimonio de Apolo</div>

                    <div class="card-body text-secondary">
                        <img src="<?php echo(base_url("public/img/testimonio.jpg")) ?>" class="img-testimonio" alt="Testimonio de Apolo">
                        <p class="card-text mt-3">Estoy muy agradecido con el programa HUELLITAS, por sacarme de las calles y encontrarme un hogar.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">    
        <div class="row">
            <div class="col-8 mt-2">
            <div class="card texto mb-3" style="max-width: 48rem;">
                <h2>7 acciones para salvar a animales en peligro de extinción</h2>
                <hr>
                  <p class="text-muted">Publicado el Sábado 14 de noviembre de 2020</p>
                <hr>
                <p>La actividad del hombre ha hecho que el número de animales en peligro de extinción haya aumentado. La contaminación, el urbanismo desmedido o la caza han puesto en riesgo a animales y plantas que forman parte del equilibrio natural impulsando el riesgo que sufren los ecosistemas del planeta. No hay duda de que las especies en peligro de extinción deben ser protegidas para que su presencia no se pierda de cara a las futuras generaciones. Los gobiernos de los países tienen mucho que decir en los procesos para salvar a un animal en peligro de extinción, pero es algo que supone una responsabilidad de cada persona con acciones como las siguientes: </p>

                <p>1. Denunciar actividades como la caza, pesca y/o venta de especies protegidas.</p>
                <p>2. Iniciar una petición para salvar a un animal en peligro de extinción o apoyarlas en las redes sociales y en tu círculo de amigos.</p>
                <p>3. Respetar los periodos de veda y los espacios donde habitan los animales. </p>
                <p>4. Evitar y denunciar la tenencia ilegal de animales en peligro de extinción. </p>
                <p>5. No contaminar aguas de ríos, mares y otros espacios naturales arrojando basura y no consumir productos o servicios de empresas que no tengan una actividad ecológica. </p>
                <p>6. No encender fuego o no apagarlo correctamente cuando salimos al campo, no lanzar colillas de cigarros desde la ventanilla del coche o realizar cualquier acción que pueda producir un incendio. </p>
                <p>7. Realizar aportaciones a organizaciones que luchen por salvar a los animales en peligro de extinción. </p>
                <p>Existen, por lo tanto, diferentes formas de salvar a animales en peligro de extinción que dependen de cada persona. Hay numerosas organizaciones que se están preocupando de proteger a las especies en peligro y en los últimos tiempos se han creado programas específicos para evitar ataques y cuidar su reproducción, auténtica base de su futuro. Es muy importante la puesta en marcha de áreas específicas que mantengan las óptimas condiciones de cuidado y protección de estos seres vivos.</p>
            </div>    
            </div>
            <div class="col-4">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Enlaces de interés</div>
                    <div class="card-body text-secondary">
                        <a href=""><p class="card-text text-success mt-3">* Adopta una mascota</p></a>
                        <a href=""><p class="card-text text-success mt-3">* Como donar</p></a>
                        <a href=""><p class="card-text text-success mt-3">* Apadrinar una mascota</p></a>
                        <a href=""><p class="card-text text-success mt-3">* Salva vidas</p></a>
                        <a href=""><p class="card-text text-success mt-3">* Ayudas de amor</p></a>
                        <a href=""><p class="card-text text-success mt-3">* Programa HUELLITAS</p></a>
                        <a href=""><p class="card-text text-success mt-3">* Servicio de vacunación</p></a>
                        <a href=""><p class="card-text text-success mt-3">* Clinica veterinaria</p></a>
                        <a href=""><p class="card-text text-success mt-3">* Paseadores</p></a>
                        <a href=""><p class="card-text text-success mt-3">* Registro de animales</p></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>
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
