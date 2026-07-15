<?php
include 'conexao.php';



?>

<!DOCTYPE html>
<html>

<head>
   <script src="https://cdn.jsdelivr.net/npm/google-charts@4.35.0"></script>
   <script src="path/to/google-charts.js"></script>


   <div class="p-0" style="background-color:#cfcfcf;">
      <title>Controle de Máquinas Mantiqueira - CMM</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <nav class="navbar ">
         <div class="container-fluid p-0">
            <a class="navbar-brand" href="index.php">Máquinas Mantiqueira</a>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="add_maquina.php">Adicionar Máquina</a>
                  </li>
               </ul>
            </div>

            <form class="d-flex" action="pesquisa_maquina.php" method="POST" role="search">
               <input class="form-control me-2" type="search" name='nome' placeholder="Nome do Usuário" aria-label="Search">
               <button class="btn btn-primary" type="submit">Search</button>
            </form>
            <div class="btn-group" role="group" aria-label="Basic outlined example">

               <a type="button" href='dashboard.php' class="btn btn-info">Dashboard</a>
               <a type="button" href='add_maquina.php' class="btn btn-success">Adicionar Máquina</a>
               <a type="button" class="btn btn-danger btn-sm" href="logout.php">Logout</a>
            </div>


         </div>
      </nav>
   </div>

</head>

<body class='container-fluid p-0'>