<?php
include 'menu.php';
include 'conexao.php';

$id_maquina = $_GET["id_maquina"];


$sql = "DELETE FROM maquina
where id_maquina = $id_maquina";

if ($link->query($sql) === TRUE) {
    echo "<div class='alert alert-success' role='alert'>
    Máquina deletada com sucesso! <a href='index.php'class='alert-link'>Voltar ao Início</a>.
  </div>";
  } else {
    echo "Error deleting record: " . $link->error;
  }
