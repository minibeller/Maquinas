<?php
include_once 'menu.php';
include_once 'conexao.php';

// Conversão segura do ID da máquina recebido via GET
$id_maquina = isset($_GET["id_maquina"]) ? intval($_GET["id_maquina"]) : 0;

$sql = "SELECT * FROM maquina WHERE id_maquina = $id_maquina";
$result = $link->query($sql);

// Inicializa variáveis para prevenir warnings
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
    echo "<div class='alert alert-danger m-3'>Máquina não encontrada para edição.</div>";
}
?>

<div class="container py-4">
    <div class="d-flex align-items-center justify-content-between pb-3 mb-4 border-bottom">
        <div>
            <span class="text-muted text-uppercase fs-7 fw-bold">Modo Edição</span>
            <h1 class="h2 mb-0 text-dark fw-bold">Editar Cadastro da Máquina</h1>
        </div>
        <a href="visualiza_maquina.php?id_maquina=<?php echo $id_maquina; ?>" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
            <i class="bi bi-arrow-left me-1"></i> Cancelar e Voltar
        </a>
    </div>

    <form action="salva_editar_maquina.php" method="POST">
        <input type="hidden" name="id_maquina" value="<?php echo $id_maquina; ?>">

        <div class="row g-4">
            
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-header bg-white border-0 pt-4 pb-2">
                        <h5 class="card-title m-0 text-secondary fw-bold">
                            <i class="bi bi-cpu me-2 text-primary"></i>Especificações Técnicas
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">SERVICE TAG / SERIAL:</label>
                            <input type="text" name="serial" class="form-control" value="<?php echo htmlspecialchars($serial); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Endereço IP:</label>
                            <input type="text" name="ip" class="form-control" value="<?php echo htmlspecialchars($ip); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Modelo da Máquina:</label>
                            <input type="text" name="modelo" class="form-control" value="<?php echo htmlspecialchars($modelo); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Sistema Operacional:</label>
                            <input type="text" name="operacional" class="form-control" value="<?php echo htmlspecialchars($operacional); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Processador:</label>
                            <input type="text" name="processador" class="form-control" value="<?php echo htmlspecialchars($processador); ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted fw-semibold small mb-1">Memória RAM:</label>
                                <input type="text" name="ram" class="form-control" value="<?php echo htmlspecialchars($ram); ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted fw-semibold small mb-1">Armazenamento:</label>
                                <input type="text" name="armazenamento" class="form-control" value="<?php echo htmlspecialchars($armazenamento); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-header bg-white border-0 pt-4 pb-2">
                        <h5 class="card-title m-0 text-secondary fw-bold">
                            <i class="bi bi-person-badge me-2 text-primary"></i>Atribuição & Faturamento
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Setor Atual:</label>
                            <select id="setor" name="setor" class="form-select" required>
                                <option value="<?php echo htmlspecialchars($setor); ?>" selected><?php echo htmlspecialchars($setor); ?></option>
                                <option value="Atendimento">Atendimento</option>
                                <option value="Comercial">Comercial</option>
                                <option value="Compras">Compras</option>
                                <option value="Diretoria">Diretoria</option>
                                <option value="Expedição">Expedição</option>
                                <option value="Faturamento">Faturamento</option>
                                <option value="Financeiro">Financeiro</option>
                                <option value="Fiscal">Fiscal</option>
                                <option value="Farmacia">Farmácia</option>
                                <option value="Logística">Logística</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Recebimento">Recebimento</option>
                                <option value="Recursos Humanos">Recursos Humanos</option>
                                <option value="Tecnologia da Informação">Tecnologia da Informação</option>
                                <option value="Televendas">Televendas</option>
                                <option value="Vendas Externas">Vendas Externas</option>
                                <option value="Máquinas Descontinuadas">Máquinas Descontinuadas</option>
                                <option value="E-commerce">E-commerce</option>
                                <option value="Análise de dados">Análise de dados</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Número da Nota Fiscal:</label>
                            <input type="text" name="nf" class="form-control" value="<?php echo htmlspecialchars($nf); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Data da Compra:</label>
                            <input type="text" name="data_compra" class="form-control" value="<?php echo htmlspecialchars($data_compra); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Nome do Usuário:</label>
                            <input type="text" name="nome_usuario" class="form-control" value="<?php echo htmlspecialchars($nome_usuario); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Nome da Máquina (Hostname):</label>
                            <input type="text" name="nome_maquina" class="form-control" value="<?php echo htmlspecialchars($nome_maquina); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Tipo de Máquina:</label>
                            <select id="tipo" name="tipo" class="form-select" required>
                                <option value="<?php echo htmlspecialchars($tipo); ?>" selected><?php echo htmlspecialchars($tipo); ?></option>
                                <option value="Laptop">Laptop</option>
                                <option value="Desktop">Desktop</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-header bg-white border-0 pt-4 pb-1">
                        <h5 class="card-title m-0 text-secondary fw-bold">Observações</h5>
                    </div>
                    <div class="card-body">
                        <textarea class="form-control text-dark" name="observacao" style="height: 150px; resize: none;"><?php echo htmlspecialchars($observacao); ?></textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-header bg-white border-0 pt-4 pb-1">
                        <h5 class="card-title m-0 text-warning fw-bold">Histórico de Manutenções</h5>
                    </div>
                    <div class="card-body">
                        <textarea class="form-control text-dark" name="manutencao" style="height: 150px; resize: none;"><?php echo htmlspecialchars($manutencao); ?></textarea>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-4 mb-5">
            <div class="col-12">
                <button type="submit" class="btn btn-success w-100 py-2.5 fw-bold shadow-sm rounded-3">
                    <i class="bi bi-save me-1"></i> Salvar Alterações do Equipamento
                </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>