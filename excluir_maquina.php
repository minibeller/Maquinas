<?php
include_once 'conexao.php';

$id_maquina = isset($_GET["id_maquina"]) ? intval($_GET["id_maquina"]) : 0;

if ($id_maquina > 0) {
    // 1. Primeiro apaga todas as licenças que apontam para essa máquina
    $sql_licencas = "DELETE FROM licenciamento WHERE maquina_id_maquina = $id_maquina";
    $link->query($sql_licencas);

    // 2. Agora que a máquina não tem mais nenhum vínculo, podemos apagá-la com segurança
    $sql_maquina = "DELETE FROM maquina WHERE id_maquina = $id_maquina";
    
    if ($link->query($sql_maquina)) {
        // Redireciona de volta para o index após excluir com sucesso
        header("Location: index.php?msg=excluido");
        exit();
    } else {
        echo "Erro ao excluir máquina: " . $link->error;
    }
} else {
    echo "ID de máquina inválido.";
}
?>