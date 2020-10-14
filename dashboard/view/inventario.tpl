<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title></title>
   {$STY}
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/inventario.css">
  </head>
  <body class="bg-dark text-white">
  <br>
    {$NAV}

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex align-items-center p-3 bg-dark rounded shadow-sm">
        <div class="lh-100 text-light">
          <p class="d-inline mb-0 display-4 lh-100 font-weight-bold txtgreen">23</p>
          <p class="d-inline"><h1 class="d-inline">/25</h1> máquinas</p>
        </div>
        <div class="col col-sm-3 offset-md-7">
          <div class="input-group">
            <input type="text" class="form-control border-0" id="vsearch" placeholder="Buscar">
            <div class="input-group-prepend">
              <span class="input-group-text border-0 bgwhite"> <i data-feather="search"></i> </span>
            </div>
          </div>
      </div>
      </div>

    <div class="row pt-2 pb-2">
      <div class="col col-sm-3 align-self-start" align="left">

      </div>
      <div class="col col-sm-3 offset-md-6" align="right">
        <div class="btn-group" role="group">
          <a href="" class="btn btn-dark">
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
            <th>#</th>
            <th>Nombre</th>
            <th>Fecha entrada</th>
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
            <td>1</td>
            <td> <label for="cchk1">Banco press</label> </td>
            <td>13-09-2019</td>
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
            <td>2</td>
            <td> <label for="cchk2">Bicicletas estáticas</label> </td>
            <td>15-09-2019</td>
            <td>
              <span class="badge bggreen text-dark">Activo</span>
            </td>
          </tr>
          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="cchk3">
                <label for="cchk3" class="custom-control-label"></label>
              </div>
            </td>
            <td>3</td>
            <td> <label for="cchk3">Máquina de dorsales</label> </td>
            <td>15-04-2020</td>
            <td>
              <span class="badge badge-light text-dark">Inactivo</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    </main>

    {$SCR}
    <script src="../assets/js/modulos/inventario.js"></script>
  </body>
</html>
