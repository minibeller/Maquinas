<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Máquinas Mantiqueira - CMM</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    
    <style>
        body {
            background-color: #f4f6f9; /* Fundo cinza suave que combina com as telas novas */
        }
        .navbar-custom {
            background-color: #ffffff;
            border-bottom: 1px solid #e3e6f0;
        }
    </style>
</head>

<body class="container-fluid p-0">

    <nav class="navbar navbar-custom py-3 mb-4 shadow-sm">
        <div class="container-fluid px-4 d-flex align-items-center justify-content-between">
            
            <a class="navbar-brand fw-bold text-success d-flex align-items-center" href="index.php">
                <i class="bi bi-cpu-fill me-2 fs-4"></i> Máquinas Mantiqueira
            </a>

            <form class="d-flex" action="pesquisa_maquina.php" method="POST" role="search" style="max-width: 400px; width: 100%;">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0" id="search-addon">
                        <i class="bi bi-search text-muted"></i>
                    </span>
                    <input class="form-control border-start-0 ps-0" type="search" name="nome" placeholder="Pesquisar por Usuário..." aria-label="Search" aria-describedby="search-addon" required>
                    <button class="btn btn-primary fw-semibold px-3" type="submit">Buscar</button>
                </div>
            </form>

            <div class="d-flex align-items-center gap-2">
                <a href="dashboard.php" class="btn btn-outline-primary fw-semibold">
                    <i class="bi bi-graph-up-arrow me-1"></i> Dashboard
                </a>
                <a href="add_maquina.php" class="btn btn-success fw-semibold">
                    <i class="bi bi-plus-circle me-1"></i> Nova Máquina
                </a>
                <a href="logout.php" class="btn btn-danger btn-sm px-3">
                    <i class="bi bi-box-arrow-right"></i> Sair
                </a>
            </div>

        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>