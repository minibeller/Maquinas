<?php
include 'menu.php';
include 'conexao.php';

$nome_licenciamento = $_POST['nome_licenciamento'];
$id_maquina = $_POST['id_maquina'];




if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0) {

    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nome = $_FILES['arquivo']['name'];

    // Pega a extensão
    $extensao = pathinfo($nome, PATHINFO_EXTENSION);

    // Converte a extensão para minúsculo
    $extensao = strtolower($extensao);

    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid(time()) . '.' . $extensao;

        // Concatena a pasta com o nome
        $destino = "upload/" . $novoNome;

        // tenta mover o arquivo para o destino
        if (move_uploaded_file($arquivo_tmp, "$destino")) {
            $sql4 = "insert into licenciamento(nome_licenciamento, arquivo, maquina_id_maquina)
            VALUES ('$nome_licenciamento', '$novoNome', $id_maquina);";       
            if (mysqli_query($link, $sql4)) {
                echo "<div class='alert alert-success' role='alert'>
              Maquina Associada com Sucesso! Arquivo salvo com sucesso! <a href='index.php' class='alert-link'>Voltar ao Início
              </a>.";
            }
        } else
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    } else
        echo " <div class='alert alert-danger' role='alert'>Maquina Associada porém ERRO ao enviar o aquivo, você poderá enviar apenas arquivos '*.jpg;*.jpeg;*.gif;*.png'<br />  <a href='index.php' class='alert-link'>Voltar ao Início
          </a>.";
} else
    echo "<div class='alert alert-success' role='alert'>
      Maquina Associada com Sucesso! Sem arquivo salvo! <a href='index.php' class='alert-link'>Voltar ao Início
      </a>.";
