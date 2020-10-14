<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title></title>
   {$STY}
    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/registro.css">
  </head>
  <body class="bg-dark text-white">
    {$NAV}
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
      <label id="tabexp" section="infousuario" class="tabs btn">
        <input type="radio" name="options" id="option1" autocomplete="off" checked> Expediente
      </label>
      <label>&nbsp;&nbsp;<i class="mt-2" data-feather="chevron-right"></i>&nbsp;&nbsp;</label>
      <label id="tabrut" section="rutinausuario" class="tabs btn">
        <input type="radio" name="options" id="option2" autocomplete="off"> Rutina
      </label>
      <label>&nbsp;&nbsp;<i class="mt-2" data-feather="chevron-right"></i>&nbsp;&nbsp;</label>
      <label id="tabpre" section="resumenusuario" class="tabs btn">
        <input type="radio" name="options" id="option3" autocomplete="off"> Resumen
      </label>
    </div>
    <br><br>
    <section class="sectionusr d-none" id="infousuario">
      <h4 class="text-white">Informacion de cliente</h4>
      <div class="row">
        <div class="col-md-4">
          <div class="p-3">
            <div class="input-group mb-3 rounded">
              <input type="text" class="form-control border-0" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
              <div class="input-group-prepend">
                <span class="input-group-text border-0 bgwhite"> <i data-feather="user"></i> </span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control border-0" placeholder="Apellidos" aria-label="Username" aria-describedby="basic-addon1">
              <div class="input-group-prepend">
                <span class="input-group-text border-0 bgwhite"> <i data-feather="user"></i> </span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control border-0" placeholder="Correo" aria-label="Username" aria-describedby="basic-addon1">
              <div class="input-group-prepend">
                <span class="input-group-text border-0 bgwhite"> <i data-feather="mail"></i> </span>
              </div>
            </div>
            <div class="input-group mb-3">
              <select class="custom-select">
                <option selected>Objetivo</option>
                <option value="1">Objetivo 1</option>
                <option value="2">Objetivo 2</option>
                <option value="3">Objetivo 3</option>
              </select>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 form-group d-inline">
                    <label for="estatura">Estatura</label>
                    <input type="number" class="form-control" id="estatura" step="0.1" value="0.0" placeholder="0.0">
                    <small id="estaturalHelp" class="form-text text-muted">Agregada en centímetros</small>
                  </div>
                  <div class="col-md-6 form-group d-inline">
                    <label for="peso">Peso</label>
                    <input type="number" class="form-control" id="peso" step="0.1" value="0.0" placeholder="0.0">
                    <small id="pesolHelp" class="form-text text-muted">Agregado en kilogramos</small>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-4 form-group d-inline">
                    <label for="grasa">% Grasa</label>
                    <input type="number" class="form-control" id="grasa" step="0.1" value="0.0" placeholder="0.0">
                    <small id="grasaHelp" class="form-text text-muted">Porcentaje corporal</small>
                  </div>
                  <div class="col-md-4 form-group d-inline">
                    <label for="musculo">Músculo</label>
                    <input type="number" class="form-control" id="musculo" step="0.1" value="0.0" placeholder="0.0">
                    <small id="musculolHelp" class="form-text text-muted">Peso exacto</small>
                  </div>
                  <div class="col-md-4 form-group d-inline">
                    <label for="agua">% Agua</label>
                    <input type="number" class="form-control" id="agua" step="0.1" value="0.0" placeholder="0.0">
                    <small id="agualHelp" class="form-text text-muted">Porcentaje corporal</small>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-3">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6 form-group d-inline">
                  <label for="cntsemanas">Cantidad de semanas</label>
                  <input type="number" class="form-control" id="cntsemanas" step="0.1" value="0.0" placeholder="0.0">
                  <small id="cntsemanasHelp" class="form-text text-muted">Duración de entrenamiento</small>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6 form-group d-inline">
                  <label for="cntrutinas">Cantidad de rutinas</label>
                  <input type="number" class="form-control" id="cntrutinas" step="0.1" value="0.0" placeholder="0.0">
                  <small id="cntrutinasHelp" class="form-text text-muted">Cantidad de rutinas</small>
                </div>
                <div class="col-md-6 form-group d-inline">
                  <label class="text-dark">Ver rutina</label>
                  <button type="button" name="button" class="btn btn-purple text-white">Ver rutina anterior</button>
                </div>
                <div class="col-md-6 form-group d-inline">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="lesionusuario">
                    <label class="custom-control-label" for="lesionusuario">Lesión</label>
                  </div>
                </div>
                <div class="col-md-12 form-group d-inline">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control sectlesion" data-toggle="modal" data-target="#modal-lesion" id="txtlesion" disabled placeholder="Añadir Lesión">
                    <div class="input-group-append">
                      <span class="input-group-text bggreen text-dark" id="basic-addon2"><span class="fa fa-user-injured"></span> </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body p-2 divlesion">
                  <span class="badge badge-light font-weight-normal" style="font-size: 13px">Nombre de lesión</span>
                  <span class="badge badge-light font-weight-normal" style="font-size: 13px">Nombre de lesión</span>
                  <span class="badge badge-light font-weight-normal" style="font-size: 13px">Nombre de lesión</span>
                  <span class="badge badge-light font-weight-normal" style="font-size: 13px">Nombre de lesión</span>
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-6 p-3" align="right">
                  <button type="button" name="button" class="btn bggreen" id="btn-sigrut">Siguiente</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="pt-3">
          <div class="col-md-12 form-group">
            <small class="form-text">Día 1</small>
            <div class="input-group mb-3">
              <select class="custom-select">
                <option selected>Enfoque dia 1</option>
                <option value="1">Enfoque 1</option>
                <option value="2">Enfoque 2</option>
                <option value="3">Enfoque 3</option>
              </select>
            </div>
          </div>
          <div class="col-md-12 form-group">
            <small class="form-text">Día 2</small>
            <div class="input-group mb-3">
              <select class="custom-select">
                <option selected>Enfoque dia 2</option>
                <option value="1">Enfoque 1</option>
                <option value="2">Enfoque 2</option>
                <option value="3">Enfoque 3</option>
              </select>
            </div>
          </div>
          <div class="col-md-12 form-group">
            <small class="form-text">Día 3</small>
            <div class="input-group mb-3">
              <select class="custom-select">
                <option selected>Enfoque dia 3</option>
                <option value="1">Enfoque 1</option>
                <option value="2">Enfoque 2</option>
                <option value="3">Enfoque 3</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-lesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-dark">Registro de lesiones</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container p-2">
              <div class="input-group mb-3">
                <input type="text" class="form-control" id="nomlesion" placeholder="Lesion" aria-label="Lesion" aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                  <button class="btn btn-light" type="button"> <span class="txtpurple mt-1" data-feather="plus-circle"></span> </button>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control border-0" id="buscalesion" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                      <span class="input-group-text border-0 bgwhite"> <i data-feather="search"></i> </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container p-2">
                <div class="custom-control custom-checkbox d-block">
                  <input type="checkbox" class="custom-control-input" id="lesion1">
                  <label class="custom-control-label text-dark" for="lesion1">Nombre de lesion</label>
                </div>
                <div class="custom-control custom-checkbox d-block">
                  <input type="checkbox" class="custom-control-input" id="lesion2">
                  <label class="custom-control-label text-dark" for="lesion2">Nombre de lesion</label>
                </div>
                <div class="custom-control custom-checkbox d-block">
                  <input type="checkbox" class="custom-control-input" id="lesion3">
                  <label class="custom-control-label text-dark" for="lesion3">Nombre de lesion</label>
                </div>
                <div class="custom-control custom-checkbox d-block">
                  <input type="checkbox" class="custom-control-input" id="lesion4">
                  <label class="custom-control-label text-dark" for="lesion4">Nombre de lesion</label>
                </div>
                <div class="custom-control custom-checkbox d-block">
                  <input type="checkbox" class="custom-control-input" id="lesion5">
                  <label class="custom-control-label text-dark" for="lesion5">Nombre de lesion</label>
                </div>
                <div class="custom-control custom-checkbox d-block">
                  <input type="checkbox" class="custom-control-input" id="lesion6">
                  <label class="custom-control-label text-dark" for="lesion6">Nombre de lesion</label>
                </div>
              </div>
            </div>
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bgpurple text-white" data-dismiss="modal">Aceptar</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    </section>

    <section class="sectionusr d-none" id="rutinausuario">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#" id="d1" class="rday rounded p-1 txtpurple">Día 1</a></li>
          <li class="breadcrumb-item"><a href="#" id="d2" class="rday rounded p-1 txtpurple">Día 2</a></li>
          <li class="breadcrumb-item"><a href="#" id="d3" class="rday rounded p-1 txtpurple">Día 3</a></li>
          <li class="breadcrumb-item"><a href="#" id="d4" class="rday rounded p-1 txtpurple">Día 4</a></li>
          <li class="breadcrumb-item"><a href="#" id="d5" class="rday rounded p-1 txtpurple">Día 5</a></li>
          <li class="breadcrumb-item"><a href="#" id="d6" class="rday rounded p-1 txtpurple">Día 6</a></li>
          <li class="breadcrumb-item"><a href="#" id="d7" class="rday rounded p-1 txtpurple">Día 7</a></li>
          <li class="breadcrumb-item"><a href="#" id="d8" class="rday rounded p-1 txtpurple">Día 8</a></li>
          <li class="breadcrumb-item"><a href="#" id="d9" class="rday rounded p-1 txtpurple">Día 9</a></li>
          <!-- <li class="breadcrumb-item active" aria-current="page">Día 2</li> -->
        </ol>
      </nav>
      <h4 class="d-inline">Rutinas</h4>
      <button type="button" name="button" class="btn btn-dark d-inline" data-toggle="modal" data-target="#modal-rutinas" style="margin-top: -10px">
        <span class="txtgreen" data-feather="plus-circle"></span>
      </button>
      <div class="row mt-3">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-0" id="buscarutina" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                  <span class="input-group-text border-0 bgwhite"> <i data-feather="search"></i> </span>
                </div>
              </div>
            </div>
          </div>
          <div class="list-group">
            <button type="button" id="r1" class="rutinas list-group-item list-group-item-action active">Activación Core</button>
            <button type="button" id="r2" class="rutinas list-group-item list-group-item-action">Activación Pierna</button>
            <button type="button" id="r3" class="rutinas list-group-item list-group-item-action">Cardio</button>
            <button type="button" id="r4" class="rutinas list-group-item list-group-item-action">...</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="jumbotron p-2">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Ejercicio</th>
                  <th scope="col">Semana 1</th>
                  <th scope="col">Semana 2</th>
                  <th scope="col">Semana 3</th>
                  <th scope="col">Semana 4</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Bicho muerto</th>
                  <td>3x10</td>
                  <td>3x12</td>
                  <td>4x10 <div class="badge bggreen">sube peso</div></td>
                  <td>4x12</td>
                </tr>
                <tr>
                  <th scope="row">Plank</th>
                  <td>3x12</td>
                  <td>3x15</td>
                  <td>4x10</td>
                  <td>4x12</td>
                </tr>
                <tr>
                  <th scope="row">Press pierna</th>
                  <td>4x10 <div class="badge bggreen">sube peso</div></td>
                  <td>4x20</td>
                  <td>5x10</td>
                  <td>5x15</td>
                </tr>
                <tr>
                  <th scope="row">Abs</th>
                  <td>4x30</td>
                  <td>4x50</td>
                  <td>4x50 <div class="badge bggreen"> con peso</div></td>
                  <td>5x30</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-6 p-3" align="right">
              <button type="button" name="button" class="btn bggreen" id="btn-sigpre">Siguiente</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modal-rutinas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-dark">Registro de rutinas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-dark">
              <div class="contariner p-2">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="nomrutina" placeholder="Nombre de rutina" aria-label="Rutina" aria-describedby="basic-addon1">
                </div>
                <div class="row">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th width="30%" scope="col">Ejercicio</th>
                        <th scope="col">Semana 1</th>
                        <th scope="col">Semana 2</th>
                        <th scope="col">Semana 3</th>
                        <th scope="col">Semana 4</th>
                        <th>
                          <button class="btn btn-light" type="button" id="newlinerutina"> <span class="txtpurple mt-1" data-feather="plus-circle"></span> </button>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="tabrnewutina">
                      <tr class="nlrut" id="l0">
                    		<th scope="row"> <input type="text" class="form-control"> </th>
                    		<td><input type="text" class="form-control"></td>
                    		<td><input type="text" class="form-control"></td>
                    		<td><input type="text" class="form-control"></td>
                    		<td><input type="text" class="form-control"></td>
                    		<td><button class="btn btn-light dellinerut" type="button" id="d0"> <span class="txtpurple mt-1" data-feather="trash"></span> </button></td>
                    	</tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bgpurple text-white" data-dismiss="modal">Agregar</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sectionusr d-none" id="resumenusuario">
      <h4>Resumen</h4>
      <div class="row">
        <div class="col-md-2 p-2 pt-3">
          <div class="card bg-light text-dark">
            <div class="card-body">
              <h5 class="card-title">Día #1</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <div class="card-text">
                <ul>
                  <li>Some quick.</li>
                  <li>example text.</li>
                  <li>to build.</li>
                  <li>on the card.</li>
                </ul>
              </div>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <a href="#" class="float-right btn btn-sm btn-outline-dark">Editar</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 p-2 pt-3">
          <div class="card bg-light text-dark">
            <div class="card-body">
              <h5 class="card-title">Día #2</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <div class="card-text">
                <ul>
                  <li>Some quick.</li>
                  <li>example text.</li>
                  <li>to build.</li>
                  <li>on the card.</li>
                </ul>
              </div>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <a href="#" class="float-right btn btn-sm btn-outline-dark">Editar</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 p-2 pt-3">
          <div class="card bg-light text-dark">
            <div class="card-body">
              <h5 class="card-title">Día #3</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <div class="card-text">
                <ul>
                  <li>Some quick.</li>
                  <li>example text.</li>
                  <li>to build.</li>
                  <li>on the card.</li>
                </ul>
              </div>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <a href="#" class="float-right btn btn-sm btn-outline-dark">Editar</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 p-2 pt-3">
          <div class="card bg-light text-dark">
            <div class="card-body">
              <h5 class="card-title">Día #4</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <div class="card-text">
                <ul>
                  <li>Some quick.</li>
                  <li>example text.</li>
                  <li>to build.</li>
                  <li>on the card.</li>
                </ul>
              </div>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <a href="#" class="float-right btn btn-sm btn-outline-dark">Editar</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 p-2 pt-3">
          <div class="card bg-light text-dark">
            <div class="card-body">
              <h5 class="card-title">Día #5</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <div class="card-text">
                <ul>
                  <li>Some quick.</li>
                  <li>example text.</li>
                  <li>to build.</li>
                  <li>on the card.</li>
                </ul>
              </div>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <a href="#" class="float-right btn btn-sm btn-outline-dark">Editar</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 p-2 pt-3">
          <div class="card bg-light text-dark">
            <div class="card-body">
              <h5 class="card-title">Día #6</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <div class="card-text">
                <ul>
                  <li>Some quick.</li>
                  <li>example text.</li>
                  <li>to build.</li>
                  <li>on the card.</li>
                </ul>
              </div>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <a href="#" class="float-right btn btn-sm btn-outline-dark">Editar</a>
            </div>
          </div>
        </div>

        <div class="col-md-2 p-2 pt-3">
          <div class="card bg-light text-dark">
            <div class="card-body">
              <h5 class="card-title">Día #7</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <div class="card-text">
                <ul>
                  <li>Some quick.</li>
                  <li>example text.</li>
                  <li>to build.</li>
                  <li>on the card.</li>
                </ul>
              </div>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <a href="#" class="float-right btn btn-sm btn-outline-dark">Editar</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 p-2 pt-3">
          <div class="card bg-light text-dark">
            <div class="card-body">
              <h5 class="card-title">Día #8</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <div class="card-text">
                <ul>
                  <li>Some quick.</li>
                  <li>example text.</li>
                  <li>to build.</li>
                  <li>on the card.</li>
                </ul>
              </div>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <a href="#" class="float-right btn btn-sm btn-outline-dark">Editar</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 p-2 pt-3">
          <div class="card bg-light text-dark">
            <div class="card-body">
              <h5 class="card-title">Día #9</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <div class="card-text">
                <ul>
                  <li>Some quick.</li>
                  <li>example text.</li>
                  <li>to build.</li>
                  <li>on the card.</li>
                </ul>
              </div>
              <!-- <a href="#" class="card-link">Card link</a> -->
              <a href="#" class="float-right btn btn-sm btn-outline-dark">Editar</a>
            </div>
          </div>
        </div>
      </div>
    </section>
	</main>

    {$SCR}
    <script src="../assets/js/modulos/registro.js"></script>
  </body>
</html>
