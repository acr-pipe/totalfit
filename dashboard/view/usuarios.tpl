<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title></title>
   {$STY}
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/usuarios.css">
  </head>
  <body class="bg-dark text-white">
  <br>
    {$NAV}

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex align-items-center p-3 bg-dark rounded shadow-sm">
      <div class="lh-100">
        <p class="d-inline mb-0 display-4 lh-100 font-weight-bold txtgreen">34</p>
        <p class="d-inline"><h1 class="d-inline">/50</h1> usuarios</p>
      </div>
      <div class="col col-sm-3 offset-md-7">
      <div class="input-group lh-100">
        <!-- <div class="input-group-prepend">
          <span class="input-group-text bg-light">
            <span data-feather="calendar"></span>
          </span>
        </div> -->
        <input type="Date" class="form-control" id="vsearchdate">
      </div>
    </div>
    </div>

  <div class="row pt-2 pb-2">
    <div class="col col-sm-3 align-self-start" align="left">
      <div class="input-group">
        <input type="text" class="form-control border-0" id="vsearch" placeholder="Buscar">
        <div class="input-group-prepend">
          <span class="input-group-text border-0 bgwhite"> <i data-feather="search"></i> </span>
        </div>
      </div>
    </div>
    <div class="col col-sm-3 offset-md-6" align="right">
      <div class="btn-group" role="group">
        <a href="registro" class="btn btn-dark">
          <span data-feather="plus"></span>
        </a>
        <a class="btn btn-dark">
          <span data-feather="edit-3"></span>
        </a>
        <a class="btn btn-dark">
          <span data-feather="x"></span>
        </a>
      </div>
    </div>
  </div>

  <div>
    <table class="table table-dark table-striped table-hover" data-sort="table">
      <thead>
        <tr>
          <!-- <th><input type="checkbox" class="bsn" id="selectAll"></th> -->
          <th></th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Fecha ingreso</th>
          <th>Mensualidad</th>
          <th>Progreso</th>
          <th>Estado</th>
        </tr>
      </thead>
      <tbody id="listausuarios">
        <tr>
          <td>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="cchk1">
              <label for="cchk1" class="custom-control-label"></label>
            </div>
          </td>
          <td> <label for="cchk1">Axel Rose</label> </td>
          <td>axel@gnroses.com</td>
          <td>15-09-98</td>
          <td>15-10</td>
          <td>
            <span class="txtgreen"> +2%</span>
          </td>
          <td>
            <span class="badge bggreen text-dark">Activo</span>
          </td>
        </tr>
        <tr>
          <td>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="cchk2">
              <label for="cchk2" class="custom-control-label"></label>
            </div>
          </td>
          <td> <label for="cchk2">Freddy Mercury</label> </td>
          <td>freddy@queen.com</td>
          <td>15-09-87</td>
          <td>15-10</td>
          <td>
            <span> -23%</span>
          </td>
          <td>
            <span class="badge badge-light text-dark">Inactivo</span>
          </td>
        </tr>
        <tr>
          <td>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="cchk3">
              <label for="cchk3" class="custom-control-label"></label>
            </div>
          </td>
          <td> <label for="cchk3">James Hetfield</label> </td>
          <td>james@metalica.com</td>
          <td>15-09-95</td>
          <td>15-10</td>
          <td>
            <span style="color: #ff62ff"> -2%</span>
          </td>
          <td>
            <span class="badge bgpurple text-white">Pendiente</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

	</main>

    {$SCR}
    <script src="../assets/js/modulos/usuarios.js"></script>
  </body>
</html>
