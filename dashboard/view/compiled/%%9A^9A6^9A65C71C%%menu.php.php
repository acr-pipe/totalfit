<?php /* Smarty version 2.6.17, created on 2020-10-14 16:47:12
         compiled from ../view/menu.php */ ?>
<!-- <nav class="navbar navbar-primary fixed-top bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-white" href="#">App <i>food_court</i></a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <span id="nuser" class="text-white" style="display: inline-block;"></span>
      <a class="nav-link text-white" href="logout"  style="display: inline-block;">Cerrar Sesión</a>
    </li>
  </ul>
</nav> -->
<nav class="navbar navbar-expand-lg fixed-top flex-md-nowrap p-0 navbar-dark bg-dark">
  <a class="navbar-brand col-sm-2 col-md-2 sidemenu mr-0 bgpurple" href="#">totalfit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item pr-2">
        <a class="nav-link p-0" disabled>
          <img src="../assets/img/user.jpg" class="rounded-circle z-depth-0 avatar" alt="avatar image" height="30">
        </a>
      </li>
      <li class="nav-item dropdown pr-2">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="txtgreen" id="nuser"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <!-- <a class="dropdown-item" href="#">Action</a> -->
          <a class="dropdown-item" href="logout">Cerrar sesión</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item p-3" align="center">
            <a type="button" href="registro" name="button" class="p-1 btn-adduser btn-bggreen pl-2 pr-2 text-decoration-none">
              <small><span data-feather="plus-circle"></span> <span class="side-text">Agregar usuario</span></small>
            </a>
          </li>
          <li class="nav-item per7100 p-2">
            <a class="nav-link sidenl" href="main">
              <span style="color: #D0FF0E" data-feather="grid"></span>
              <span class="side-text text-light">Dashboard</span> <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item per7100 p-2">
            <a class="nav-link sidenl" href="agenda">
              <span style="color: #D0FF0E" data-feather="calendar"></span>
              <span class="side-text text-light">Agenda</span> <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item per7100 p-2">
            <a class="nav-link sidenl" href="usuarios">
              <span style="color: #D0FF0E" data-feather="user"></span>
              <span class="side-text text-light">Usuarios</span> <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item per7100 p-2">
            <a class="nav-link sidenl" href="ajustes">
              <span style="color: #D0FF0E" data-feather="settings"></span>
              <span class="side-text text-light">Ajustes</span> <span class="sr-only"></span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="notification" style="z-index: 4000; position: fixed; margin: 2% 25%; width: 50%" align="center"></div>