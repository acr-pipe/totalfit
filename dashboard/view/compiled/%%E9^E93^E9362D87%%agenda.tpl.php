<?php /* Smarty version 2.6.17, created on 2020-10-13 21:03:55
         compiled from agenda.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title></title>
   <?php echo $this->_tpl_vars['STY']; ?>

    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/agenda.css">
  </head>
  <body class="bg-dark text-white">
    <?php echo $this->_tpl_vars['NAV']; ?>

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 bg-dark">
    <div class="row">
      <div class="col-sm-12" align="center">
        <p class="tyclass font-weight-bolder p-2 pl-3 pr-3 d-inline-block" id="todo">TODO</p>
        <p class="tyclass font-weight-bolder p-2 pl-3 pr-3 d-inline-block" id="spinning">SPINNING</p>
        <p class="tyclass font-weight-bolder p-2 pl-3 pr-3 d-inline-block" id="clase">CLASE</p>
        <p class="tyclass font-weight-bolder p-2 pl-3 pr-3 d-inline-block" id="gym">GYM</p>
        <p class="tyclass font-weight-bolder p-2 pl-3 pr-3 d-inline-block" id="crossfit">CROSSFIT</p>
        <p class="tyclass font-weight-bolder p-2 pl-3 pr-3 d-inline-block" id="cardio">CARDIO</p>
        <p class="tyclass font-weight-bolder p-2 pl-3 pr-3 d-inline-block" id="body">BODY</p>
        <p class="tyclass font-weight-bolder p-2 pl-3 pr-3 d-inline-block" id="yoga">YOGA</p>
      </div>
    </div>
    <div class="p-4">
      <table class="table table-striped table-dark w-100">
        <thead class="border-0 text-center bg-dark">
          <th class="thc align-middle text-uppercase" scope="col">Hora</th>
          <th class="thc align-middle text-uppercase" scope="col">Lunes</th>
          <th class="thc align-middle text-uppercase" scope="col">Martes</th>
          <th class="thc align-middle text-uppercase" scope="col">Miércoles</th>
          <th class="thc align-middle text-uppercase" scope="col">Jueves</th>
          <th class="thc align-middle text-uppercase" scope="col">Viernes</th>
          <th class="thc align-middle text-uppercase" scope="col">Sábado</th>
          <th class="thc align-middle text-uppercase" scope="col">Domingo</th>
        </thead>
        <tbody class="table-bordered text-center" style="overflow: auto">
          <tr>
            <th scope="row" class="align-middle thc"> 5.00 am</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover">
              <div class="ts-item" data-type="spinning">
                <h6 class="txtgreen">SPINNING</h6>
                <span class="text-white font-weight-bolder">Jhon Doe</span><br>
                <span class="text-white">Nivel 5</span><br>
                <span class="text-white">Cupos <b>10</b></span>
              </div>
            </td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 6.00 am</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 7.00 am</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4">
              <div class="ts-item" data-type="clase">
                <h6 class="txtgreen">CLASE</h6>
                <span class="text-white font-weight-bolder">Jhon Doe</span><br>
                <span class="text-white">Nivel 5</span><br>
                <span class="text-white">Cupos <b>10</b></span>
              </div>
            </td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 8.00 am</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 9.00 am</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4">
              <div class="ts-item" data-type="yoga">
                <h6 class="txtgreen">YOGA</h6>
                <span class="text-white font-weight-bolder">Jhon Doe</span><br>
                <span class="text-white">Nivel 3</span><br>
                <span class="text-white">Cupos <b>10</b></span>
              </div>
            </td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 10.00 am</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4">
              <div class="ts-item" data-type="cardio">
                <h6 class="txtgreen">CARDIO</h6>
                <span class="text-white font-weight-bolder">Jhon Doe</span><br>
                <span class="text-white">Nivel 2</span><br>
                <span class="text-white">Cupos <b>10</b></span>
              </div>
            </td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 11.00 am</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4">
              <div class="ts-item" data-type="spinning">
                <h6 class="txtgreen">SPINNING</h6>
                <span class="text-white font-weight-bolder">Jhon Doe</span><br>
                <span class="text-white">Nivel 5</span><br>
                <span class="text-white">Cupos <b>10</b></span>
              </div>
            </td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 12.00 pm</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 1.00 pm</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 2.00 pm</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4">
              <div class="ts-item" data-type="gym">
                <h6 class="txtgreen">GYM</h6>
                <span class="text-white font-weight-bolder">Jhon Doe</span><br>
                <span class="text-white">Nivel 3</span><br>
                <span class="text-white">Cupos <b>10</b></span>
              </div>
            </td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 3.00 pm</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 4.00 pm</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4">
              <div class="ts-item" data-type="crossfit">
                <h6 class="txtgreen">CROSSFIT</h6>
                <span class="text-white font-weight-bolder">Jhon Doe</span><br>
                <span class="text-white">Nivel 2</span><br>
                <span class="text-white">Cupos <b>10</b></span>
              </div>
            </td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 5.00 pm</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 6.00 pm</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4">
              <div class="ts-item" data-type="spinning">
                <h6 class="txtgreen">SPINNING</h6>
                <span class="text-white font-weight-bolder">Jhon Doe</span><br>
                <span class="text-white">Nivel 5</span><br>
                <span class="text-white">Cupos <b>10</b></span>
              </div>
            </td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 7.00 pm</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4">
              <div class="ts-item" data-type="body">
                <h6 class="txtgreen">BODY</h6>
                <span class="text-white font-weight-bolder">Jhon Doe</span><br>
                <span class="text-white">Nivel 4</span><br>
                <span class="text-white">Cupos <b>10</b></span>
              </div>
            </td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 8.00 pm</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
          <tr>
            <th scope="row" class="align-middle thc"> 9.00 pm</th>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
            <td data-toggle="modal" data-target="#schedule" class="tdhover p-4"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="modal fade" id="schedule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel">Agendar Clase</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="typclase" class="text-dark">Tipo de clase</label>
              <select class="form-control" id="typclase">
                <option id="t0">CLASE</option>
                <option id="t1">SPINNING</option>
                <option id="t2">GYM</option>
                <option id="t3">CROSSFIT</option>
                <option id="t4">CARDIO</option>
                <option id="t5">BODY</option>
                <option id="t6">YOGA</option>
              </select>
            </div>

            <div class="form-group">
              <label for="typclase" class="text-dark">Instructor</label>
              <select class="form-control" id="typclase">
                <option id="i0">Jhon Doe</option>
                <option id="i1">Alison Cooper</option>
                <option id="i2">Axel Rose</option>
                <option id="i3">Freddy Mercury</option>
              </select>
            </div>

            <div class="form-group">
              <label for="typclase" class="text-dark">Nivel</label>
              <select class="form-control" id="typclase">
                <option id="n0">1</option>
                <option id="n1">2</option>
                <option id="n2">3</option>
                <option id="n3">4</option>
              </select>
            </div>

            <div class="for-group">
              <label for="typclase" class="text-dark">Cupos</label>
              <div class="input-group">
                <input type="number" class="form-control border-0" id="vcupos" placeholder="0">
                <div class="input-group-prepend">
                  <span class="input-group-text border-0 bgwhite"> <i class="fa fa-users"></i> </span>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bgpurple text-white" data-dismiss="modal">Agendar</button>
            <!-- <button type="button" class="btn btn-primary">Aceptar</button> -->
          </div>
        </div>
      </div>
    </div>
	</main>

    <?php echo $this->_tpl_vars['SCR']; ?>

    <script src="../assets/js/modulos/agenda.js"></script>
  </body>
</html>