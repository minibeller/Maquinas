<?php
session_start();
include 'menu.php';
include 'conexao.php';

$id_maquina = $_POST['id_maquina'];
$serial = $_POST['serial'];
$ip = $_POST['ip'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];
$operacional = $_POST['operacional'];
$processador = $_POST['processador'];
$ram = $_POST['ram'];
$armazenamento = $_POST['armazenamento'];
$nf = $_POST['nf'];
$data_compra = $_POST['data_compra'];
$nome_usuario = $_POST['nome_usuario'];
$nome_maquina = $_POST['nome_maquina'];
$setor = $_POST['setor'];
$observacao = $_POST['observacao'];
$manutencao = $_POST['manutencao'];

$sql="UPDATE maquina 
SET
id_maquina ='$id_maquina ',
serial ='$serial ',
ip='$ip ',
modelo ='$modelo ',
tipo ='$tipo ',
operacional ='$operacional ',
processador ='$processador ',
ram ='$ram ',
armazenamento ='$armazenamento ',
nf ='$nf ',
data_compra ='$data_compra ',
nome_usuario ='$nome_usuario ',
nome_maquina ='$nome_maquina ',
setor ='$setor ',
observacao = '$observacao',
manutencao = '$manutencao' where id_maquina = $id_maquina;
";
$result = $link->query($sql);


if ($link->query($sql) === TRUE) {
    echo "<div class='alert alert-success' role='alert'>
    Máquina editada com sucesso! <a href='visualiza_maquina.php?id_maquina=" . $id_maquina. "'class='alert-link'>Voltar ao Início</a>.
  </div>";
  } else {
    echo "Error: " . $sql . "<br>" . $link->error;
  }
  



