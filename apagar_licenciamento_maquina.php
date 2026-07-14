<?php
include 'menu.php';
include 'conexao.php';

$id_licenciamento = $_GET["id_licenciamento"];


$sql = "DELETE FROM maquinas.licenciamento
where id_licenciamento = $id_licenciamento";

if ($link->query($sql) === TRUE) {
    echo "<div class='alert alert-success' role='alert'>
    Licenciamento deletado com sucesso! <a href='index.php'class='alert-link'>Voltar ao Início</a>.
  </div>";
  } else {
    echo "Error deleting record: " . $link->error;
  }
