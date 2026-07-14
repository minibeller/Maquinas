<?php
include_once 'conexao.php';
include_once 'menu.php';
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
$observacao = "SEM OBSERVAÇÃO!";
$manutencao = "SEM MANUTENÇÃO!";
$sql = "INSERT INTO maquina (serial, ip, modelo, tipo, operacional, processador, ram, armazenamento, nf, data_compra, nome_usuario, nome_maquina, setor, observacao, manutencao) VALUES ('$serial', '$ip', '$modelo', '$tipo', '$operacional', '$processador', '$ram', '$armazenamento', '$nf', '$data_compra', '$nome_usuario', '$nome_maquina', '$setor', '$observacao', '$manutencao')";
if (mysqli_query($link, $sql)) {
    $id = mysqli_insert_id($link);
    if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0) {
        $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
        $nome = $_FILES['arquivo']['name'];
        // Pega a extensão
        $extensao = pathinfo($nome, PATHINFO_EXTENSION);
        // Converte a extensão para minúscul
        $extensao = strtolower($extensao);
        // Somente imagens, .jpg;.jpeg;.gif;.png
        // Verifica se a extensão está dentro das permitidas
        if (in_array($extensao, array('jpg', 'jpeg', 'gif', 'png'))) {
            $novoNome = uniqid(time()) . '.' . $extensao;
            $destino = "upload/".$novoNome;
            if (move_uploaded_file($arquivo_tmp, $destino)) {
                $sql4 = "UPDATE maquina SET arquivo = '$novoNome' WHERE id_maquina = $id";
                if (mysqli_query($link, $sql4)) {
                    echo "<div class='alert alert-success' role='alert'>
                        Máquina Enviada com Sucesso! Arquivo salvo com sucesso! <a href='index.php' class='alert-link'>Voltar ao Início</a>.</div>";
                } else {
                    echo "Nota não anexada";
                }
            } else {
                echo "<div class='alert alert-danger' role='alert'>Máquina enviada, porém houve um erro ao enviar o arquivo. Você só pode enviar arquivos '*.jpg', '*.jpeg', '*.gif' ou '*.png'. <a href='index.php' class='alert-link'>Voltar ao Início</a>.</div>";
            }
        } else {
            echo "<div class='alert alert-success' role='alert'>
                Máquina Enviada com Sucesso! Sem arquivo salvo! <a href='index.php' class='alert-link'>Voltar ao Início</a>.</div>";
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>Erro ao enviar Máquina. <a href='index.php' class='alert-link'>Voltar ao Início</a>.</div>";
    }
} else {
    echo 'ERRO total!';
}

mysqli_close($link);
?>