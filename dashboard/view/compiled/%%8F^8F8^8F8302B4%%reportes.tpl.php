<?php /* Smarty version 2.6.17, created on 2020-02-03 16:49:12
         compiled from reportes.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title></title>
   <?php echo $this->_tpl_vars['STY']; ?>

    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/reportes.css">
  </head>
  <body>
    <br>
    <?php echo $this->_tpl_vars['NAV']; ?>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

      <h4>Ventas semanales</h4>
      <canvas class="my-4 w-100" id="myChart" width="900" height="200"></canvas>

    </main>

    <?php echo $this->_tpl_vars['SCR']; ?>

    <script src="../assets/js/modulos/reportes.js"></script>
  </body>
</html>