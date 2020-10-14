<?php /* Smarty version 2.6.17, created on 2020-02-03 16:35:52
         compiled from allordenes.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title></title>
   <?php echo $this->_tpl_vars['STY']; ?>

    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/allordenes.css">
  </head>
  <body>
  <br>
    <?php echo $this->_tpl_vars['NAV']; ?>


	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	
		<div class="d-flex align-items-center p-3 bg-light rounded shadow-sm">
			<div class="lh-100">
				<h6 class="mb-0 lh-100">Todas las ordenes</h6>
			</div>
		</div>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#" class="tipord text-dark" tipo="0">Todas</a></li>
				<li class="breadcrumb-item"><a href="#" class="tipord text-dark" tipo="1">Express <span class="text-primary">•</span></a></li>
				<li class="breadcrumb-item"><a href="#" class="tipord text-dark" tipo="2">Recoge <span class="text-dark">•</span></a></li>
				<li class="breadcrumb-item"><a href="#" class="tipord text-dark" tipo="3">Servido <span class="text-warning">•</span></a></li>
			</ol>
		</nav>
		
		<div class="my-3 p-3 bg-white rounded shadow-sm">
			<section id="getordenesbytipo">
				<!-- JS -->
			</section>
		</div>
	
	</main>


    <?php echo $this->_tpl_vars['SCR']; ?>

    <script src="../assets/js/modulos/allordenes.js"></script>
  </body>
</html>