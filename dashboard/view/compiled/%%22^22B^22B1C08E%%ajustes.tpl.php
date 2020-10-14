<?php /* Smarty version 2.6.17, created on 2020-10-13 22:21:43
         compiled from ajustes.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title></title>
   <?php echo $this->_tpl_vars['STY']; ?>

    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/ajustes.css">
  </head>
  <body class="bg-dark text-white">
  <br>
    <?php echo $this->_tpl_vars['NAV']; ?>


	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="row">
        <div class="col-md-4">
          <a href="ejercicios" class="text-decoration-none">
          <div class="card bg-dark text-white itemajuste border-0">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <i class="fa fa-dumbbell fa-5x mt-2"></i>
                </div>
                <div class="col">
                  <h5 class="card-title mt-2">Ejercicios</h5>
                  <p class="card-text">Agregue, modifique y elimine de la lista de ejericios.</p>
                  <!-- <a href="#" class="btn bggreen">Acceder</a> -->
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>

        <div class="col-md-4">
          <a href="#" class="text-decoration-none">
          <div class="card bg-dark text-white itemajuste border-0">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <i class="fa fa-cogs fa-5x mt-2"></i>
                </div>
                <div class="col">
                  <h5 class="card-title mt-2">Negocio</h5>
                  <p class="card-text">Modifique los ajustes escenciales para el óptimo manejo de su negocio.</p>
                  <!-- <a href="#" class="btn bggreen">Acceder</a> -->
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>

        <div class="col-md-4">
          <a href="inventario" class="text-decoration-none">
          <div class="card bg-dark text-white itemajuste border-0">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <i class="fa fa-warehouse fa-5x mt-2"></i>
                </div>
                <div class="col">
                  <h5 class="card-title mt-2">Inventario</h5>
                  <p class="card-text">Agregue, modifique y elimine de la lista de maquinaria.</p>
                  <!-- <a href="#" class="btn bggreen">Acceder</a> -->
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>

      </div>
	</main>

    <?php echo $this->_tpl_vars['SCR']; ?>

    <script src="../assets/js/modulos/ajustes.js"></script>
  </body>
</html>