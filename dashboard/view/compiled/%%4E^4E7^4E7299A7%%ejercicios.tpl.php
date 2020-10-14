<?php /* Smarty version 2.6.17, created on 2020-10-13 22:23:04
         compiled from ejercicios.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="max-age=86400"/>
    <title></title>
   <?php echo $this->_tpl_vars['STY']; ?>

    <link rel="stylesheet" type="text/css" href="../assets/css/modulos/ejercicios.css">
  </head>
  <body class="bg-dark text-white">
  <br>
    <?php echo $this->_tpl_vars['NAV']; ?>


	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h5 class="ml-3">Ejercicios</h5>
    <div class="row p-3">
      <div class="col-md-4">
        <div class="input-group mb-3 rounded">
          <input type="text" class="form-control border-0" placeholder="Código" aria-label="Username" aria-describedby="basic-addon1">
          <div class="input-group-prepend">
            <span class="input-group-text border-0 bgwhite"> <i class="fa fa-qrcode"></i> </span>
          </div>
        </div>
        <div class="input-group mb-3 rounded">
          <input type="text" class="form-control border-0" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
          <div class="input-group-prepend">
            <span class="input-group-text border-0 bgwhite"> <i class="fa fa-keyboard"></i> </span>
          </div>
        </div>
        <div class="input-group mb-3">
          <select class="custom-select">
            <option selected>Tipo</option>
            <option value="1">Tipo 1</option>
            <option value="2">Tipo 2</option>
            <option value="3">Tipo 3</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <select class="custom-select">
            <option selected>Grupo muscular</option>
            <option value="1">Grupo 1</option>
            <option value="2">Grupo 2</option>
            <option value="3">Grupo 3</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control sectlesion" data-toggle="modal" data-target="#modal-lesion" id="txtlesion" placeholder="Añadir Lesión">
          <div class="input-group-append">
            <span class="input-group-text bggreen text-dark" id="basic-addon2"> <span class="fa fa-user-injured"></span> </span>
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
        <!-- Dropzone -->
        <div class="mt-3">
          <form action="/file-upload" class="dropzone">
            <div class="fallback">
              <input name="file" type="file" multiple />
            </div>
          </form>
        </div>
        <div class="pt-2 p-1" align="right">
          <button type="button" class="btn btn-bggreen"> Guardar</a>
        </div>
      </div>
      <div class="col">
        <div class="row mb-2">
          <div class="col col-sm-4 align-self-start" align="left">
            <div class="input-group ml-3">
              <input type="text" class="form-control border-0" id="vsearch" placeholder="Buscar">
              <div class="input-group-prepend">
                <span class="input-group-text border-0 bgwhite"> <i data-feather="search"></i> </span>
              </div>
            </div>
          </div>
          <div class="col col-sm-3 offset-md-3" align="right">
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-dark">
                <span data-feather="edit-3"></span>
              </button>
              <button type="button" class="btn btn-dark">
                <span data-feather="x"></span>
              </button>
            </div>
          </div>
        </div>
        <!-- lista -->
        <div class="container" style="height: 650px; overflow-y: scroll">
          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e1"><img width="100%" src="https://www.dare2b.com/blog/wp-content/uploads/2020/04/DUE473_685_P_1.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e1" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label"for="e1">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e2"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F05%2F16185814%2Fbest-back-exercises-for-back-fat.jpg&q=85" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e2" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label"for="e2">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e3"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F05%2F16182911%2Fside-plank-best-exercises-for-women_0.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e3" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label"for="e3">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e4"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F05%2F16182912%2Fpush-up-best-exercise-for-women.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e4" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label"for="e4">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e5"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F05%2F16182913%2Fsecond-position-plies.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e5" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label"for="e5">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e6"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F05%2F16182914%2Fhiit-workout-best-exercises-for-women.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e6" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label"for="e6">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e7"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F05%2F16182915%2Ftriceps-extension-best-exercise-for-women-arms.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e7" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label"for="e7">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e8"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F05%2F16182916%2Fstep-ups-best-exercises-for-women.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e8" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label"for="e8">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e9"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F05%2F16182916%2Fbest-exercises-for-women-glute-bridge.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e9" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label"for="e9">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e10"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F05%2F16182917%2Fbest-exercise-for-women-plank-arm-raise.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e10" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e10">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e11"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F05%2F16182918%2Fshoulder-stand-best-exercise-for-women.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e11" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e11">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e12"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F12%2Fbest-leg-workout-for-women-split-squat.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e12" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e12">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e13"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F12%2Fbest-leg-workout-for-women-three-way-lunge.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e13" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e13">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e14"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F12%2Fbest-leg-workout-for-women-good-morning.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e14" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e14">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e15"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F12%2Fbest-leg-workout-for-women-single-leg-deadlift.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e15" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e15">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e16"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F12%2Fbest-leg-workout-for-women-calf-raise.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e16" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e16">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e17"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F12%2Fbest-leg-workout-for-women-glute-hamstring-slider-curl.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e17" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e17">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e18"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2020%2F01%2Fdonkey-kicks.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e18" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e18">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e19"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2020%2F01%2F6.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e19" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e19">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e20"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2020%2F01%2F7.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e20" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e20">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e21"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2020%2F01%2F8.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e21" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e21">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e22"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2020%2F01%2F9.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e22" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e22">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e23"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2020%2F01%2F1.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e23" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e23">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e24"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2020%2F01%2F2.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e24" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e24">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e25"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2020%2F01%2F3.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e25" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e25">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e26"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2020%2F01%2F4.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e26" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e26">PushUps</label>
            </div>
          </div>

          <div class="col-sm-2 text-center pbtn d-inline-block p-0 mt-1 bg-light text-dark rounded">
            <label for="e27"><img width="100%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2020%2F01%2F5.jpg" class="pbtn thumbex rounded mx-auto" alt="IMG"></label>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="e27" name="customRadioInline1" class="custom-control-input">
              <label class="custom-control-label" for="e27">PushUps</label>
            </div>
          </div>
        </div>

        <!-- <img width="15%" src="https://www.dare2b.com/blog/wp-content/uploads/2020/04/DUE473_685_P_1.jpg" class="pbtn thumbex rounded mx-auto d-inline-block" alt="IMG"> -->

        <!-- <img width="15%" src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F35%2F2019%2F05%2F16185814%2Fbest-back-exercises-for-back-fat.jpg&q=85" class="pbtn thumbex rounded mx-auto d-inline-block" alt="IMG"> -->

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
	</main>

    <?php echo $this->_tpl_vars['SCR']; ?>

    <script src="../assets/js/modulos/ejercicios.js"></script>
  </body>
</html>