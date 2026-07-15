<?php
include 'menu.php';
include 'conexao.php';

// Proteção básica contra SQL Injection convertendo para inteiro
$id_maquina = isset($_GET["id_maquina"]) ? intval($_GET["id_maquina"]) : 0;

$sql = "SELECT * FROM maquina WHERE id_maquina = $id_maquina";
$result = $link->query($sql);

// Inicializa variáveis para evitar warnings caso não retorne nada
$serial = $ip = $modelo = $tipo = $operacional = $processador = $ram = $armazenamento = "";
$nf = $data_compra = $nome_usuario = $nome_maquina = $setor = $observacao = $manutencao = "";

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $serial         = $row['serial'];
        $ip             = $row['ip'];
        $modelo         = $row['modelo'];
        $tipo           = $row['tipo'];
        $operacional    = $row['operacional'];
        $processador    = $row['processador'];
        $ram            = $row['ram'];
        $armazenamento  = $row['armazenamento'];
        $nf             = $row['nf'];
        $data_compra    = $row['data_compra'];
        $nome_usuario   = $row['nome_usuario'];
        $nome_maquina   = $row['nome_maquina'];
        $setor          = $row['setor'];
        $observacao     = $row['observacao'];
        $manutencao     = $row['manutencao'];
    }
} else {
    echo "<div class='alert alert-danger m-3'>Máquina não encontrada.</div>";
}

$sql2 = "SELECT * FROM licenciamento WHERE maquina_id_maquina = $id_maquina";
$result2 = $link->query($sql2);
?>

<div class="container py-4">
    <div class="d-flex align-items-center justify-content-between pb-3 mb-4 border-bottom">
        <div>
            <span class="text-muted text-uppercase fs-7 fw-bold">Ativo de TI</span>
            <h1 class="h2 mb-0 text-dark"><?php echo $nome_maquina ? $nome_maquina : "Visualizar Máquina"; ?></h1>
        </div>
        <div class="badge bg-primary fs-6 py-2 px-3">
            IP: <?php echo $ip; ?>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="card-title m-0 text-secondary fw-bold">
                        <i class="bi bi-cpu me-2"></i>Especificações de Hardware
                    </h5>
                </div>
                <div class="card-body pt-0">
                    <div class="mb-3">
                        <label class="form-label text-muted fw-semibold small mb-1">SERVICE TAG / SERIAL</label>
                        <input type="text" class="form-control bg-light" value="<?php echo $serial; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted fw-semibold small mb-1">Modelo da Máquina</label>
                        <input type="text" class="form-control bg-light" value="<?php echo $modelo; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted fw-semibold small mb-1">Sistema Operacional</label>
                        <input type="text" class="form-control bg-light" value="<?php echo $operacional; ?>" readonly>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Processador</label>
                            <input type="text" class="form-control bg-light" value="<?php echo $processador; ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Memória RAM</label>
                            <input type="text" class="form-control bg-light" value="<?php echo $ram; ?>" readonly>
                        </div>
                    </div>
                    <div>
                        <label class="form-label text-muted fw-semibold small mb-1">Armazenamento</label>
                        <input type="text" class="form-control bg-light" value="<?php echo $armazenamento; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="card-title m-0 text-secondary fw-bold">
                        <i class="bi bi-person-badge me-2"></i>Atribuição & Registro
                    </h5>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Usuário Responsável</label>
                            <input type="text" class="form-control bg-light" value="<?php echo $nome_usuario; ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Setor / Departamento</label>
                            <input type="text" class="form-control bg-light" value="<?php echo $setor; ?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Tipo de Equipamento</label>
                            <input type="text" class="form-control bg-light" value="<?php echo $tipo; ?>" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Data de Compra</label>
                            <input type="text" class="form-control bg-light" value="<?php echo $data_compra; ?>" readonly>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted fw-semibold small mb-1">Nota Fiscal de Compra (Número)</label>
                        <input type="text" class="form-control bg-light" value="<?php echo $nf; ?>" readonly>
                    </div>
                    
                    <div>
                        <label class="form-label text-muted fw-semibold small mb-1">Anexo da Nota Fiscal</label>
                        <div class="p-2 border rounded bg-light d-flex align-items-center justify-content-between">
                            <span class="small text-truncate"><i class="bi bi-file-earmark-pdf text-danger me-2"></i>NF_Maquina_<?php echo $id_maquina; ?></span>
                            <?php
                            $sql3 = "SELECT arquivo FROM maquina WHERE id_maquina = $id_maquina";
                            $result3 = $link->query($sql3);
                            if ($result3 && $result3->num_rows > 0) {
                                $row3 = $result3->fetch_assoc();
                                $arquivo_nota = $row3['arquivo'];
                                if (!empty($arquivo_nota)) {
                                    echo "<a href='upload/{$arquivo_nota}' class='btn btn-sm btn-outline-primary' target='_blank'>Visualizar</a>";
                                } else {
                                    echo "<span class='text-muted small'>Sem anexo</span>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="card-title m-0 text-secondary fw-bold">Observações</h5>
                </div>
                <div class="card-body pt-0">
                    <textarea class="form-control bg-light" style="height: 120px" readonly><?php echo $observacao; ?></textarea>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3">
                    <h5 class="card-title m-0 text-secondary fw-bold text-warning">Histórico de Manutenções</h5>
                </div>
                <div class="card-body pt-0">
                    <textarea class="form-control bg-light text-dark" style="height: 120px" readonly><?php echo $manutencao; ?></textarea>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 py-3 d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 text-secondary fw-bold">
                        <i class="bi bi-shield-check text-success me-2"></i>Licenças Ativas na Máquina (Microsoft / Office / CALs)
                    </h5>
                    <a href="editar_licenciamento_maquina.php?id_maquina=<?php echo $id_maquina; ?>" class="btn btn-sm btn-info text-white">
                        Gerenciar Licenciamento
                    </a>
                </div>
                <div class="card-body pt-0">
                    <div class="list-group list-group-flush border rounded">
                        <?php
                        if ($result2 && $result2->num_rows > 0) {
                            while ($row2 = $result2->fetch_assoc()) {
                                $id_licenciamento = $row2['id_licenciamento'];
                                $nome_licenciamento = $row2['nome_licenciamento'];
                                $arquivo = $row2['arquivo'];
                                ?>
                                <div class="list-group-item d-flex align-items-center justify-content-between py-3">
                                    <div class="d-flex align-items-center">
                                        <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill me-3">Ativa</span>
                                        <span class="fw-semibold text-dark"><?php echo $nome_licenciamento; ?></span>
                                    </div>
                                    <div class="d-flex align-items-center gap-3">
                                        <a href="upload/<?php echo $arquivo; ?>" class="btn btn-sm btn-link text-decoration-none" target="_blank">
                                            <i class="bi bi-paperclip me-1"></i>Ver Comprovante / NF
                                        </a>
                                        <a href="apagar_licenciamento_maquina.php?id_licenciamento=<?php echo $id_licenciamento; ?>" class="btn btn-sm btn-outline-danger" title="Remover Licença">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<div class='text-muted text-center py-4'>Nenhum licenciamento associado a este dispositivo.</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-5 g-3">
        <div class="col-sm-6">
            <a href="editar_maquina.php?id_maquina=<?php echo $id_maquina; ?>" class="btn btn-warning w-100 text-dark fw-bold py-2 shadow-sm">
                Editar Cadastro da Máquina
            </a>
        </div>
        <div class="col-sm-6">
            <button type="button" class="btn btn-danger w-100 fw-bold py-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                Excluir Máquina
            </button>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title fw-bold" id="confirmDeleteModalLabel">⚠️ Confirmar Exclusão</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4 text-center">
                <p class="fs-5 mb-1 text-dark fw-bold">Deseja apagar esta máquina?</p>
                <p class="text-muted mb-0">Esta ação irá apagar o histórico, notas fiscais anexadas e vínculos de licenciamento permanentemente.</p>
            </div>
            <div class="modal-footer bg-light border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <a href="excluir_maquina.php?id_maquina=<?php echo $id_maquina; ?>" class="btn btn-danger px-4">Excluir Permanentemente</a>
            </div>
        </div>
    </div>
</div>