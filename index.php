<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/customColors.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/index.css" media="screen,projection" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario</title>
</head>

<body>
  <video src="img/video.mp4" id="vidFondo"></video>

  <div class="contenedor">
    <div class="card rowTitulo">
      <h1>Buscador</h1>
    </div>
    <div class="colFiltros">
      <form action="" method="post" id="formulario">
        <div class="filtrosContenido">
          <div class="tituloFiltros">
            <h5>Realiza una búsqueda personalizada</h5>
          </div>
          <div class="filtroCiudad input-field">
            <label for="selectCiudad">Ciudad:</label>

          </div>
          <div class="filtroTipo input-field">
            <label for="selecTipo">Tipo:</label><br>
            <select name="tipo" id="selectTipo">
              <option value="orlando" selected>Orlando</option>
              <option value="los_angeles">Los Angeles</option>
              <option value="newyork">New York</option>
            </select>
          </div>
          <div class="filtroPrecio">
            <label for="rangoPrecio">Precio:</label>
            <input type="text" id="rangoPrecio" name="precio" value="" />
          </div>
          <div class="botonField">
            <input type="submit" class="btn white" value="Buscar" id="submitButton">
          </div>
        </div>
      </form>
    </div>

    <div class="colContenido">
      <div class="tituloContenido card">
        <h5>Resultados de la búsqueda:</h5>
        <div class="divider"></div>

        <form action="" method="post">
          <button type="submit" name="todos" class="btn-flat waves-effect" id="mostrarTodos">Mostrar Todos</button>
          <input type="hidden" name="todosi" value="1">

        </form>

      </div>
      <?php

      include('buscador.php');
      ?>


    </div>


  </div>

  <script type="text/javascript" src="js/jquery-3.0.0.js"></script>
  <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
</body>

</html>