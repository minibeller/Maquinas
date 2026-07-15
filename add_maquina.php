<?php
include_once 'menu.php';
include_once 'conexao.php';
?>

<div class="container py-4">
    <div class="d-flex align-items-center justify-content-between pb-3 mb-4 border-bottom">
        <div>
            <span class="text-muted text-uppercase fs-7 fw-bold">Gestão de Ativos</span>
            <h1 class="h2 mb-0 text-dark fw-bold">Cadastrar Novo Equipamento</h1>
        </div>
        <a href="index.php" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
            <i class="bi bi-arrow-left me-1"></i> Voltar à Lista
        </a>
    </div>

    <form action="salva_maquina.php" method="POST" enctype="multipart/form-data">
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
                            <input type="text" name="serial" class="form-control" placeholder="Digite a etiqueta de serviço ou serial" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Endereço IP:</label>
                            <input type="text" name="ip" class="form-control" placeholder="Ex: 192.168.1.50">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Modelo da Máquina:</label>
                            <input type="text" name="modelo" class="form-control" placeholder="Ex: Dell OptiPlex 3080" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Sistema Operacional:</label>
                            <input type="text" name="operacional" class="form-control" placeholder="Ex: Windows 11 Pro">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Processador:</label>
                            <input type="text" name="processador" class="form-control" placeholder="Ex: Intel Core i5 10th Gen">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted fw-semibold small mb-1">Memória RAM:</label>
                                <input type="text" name="ram" class="form-control" placeholder="Ex: 16 GB">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted fw-semibold small mb-1">Armazenamento:</label>
                                <input type="text" name="armazenamento" class="form-control" placeholder="Ex: SSD 512 GB">
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
                            <label class="form-label text-muted fw-semibold small mb-1">Selecione o Setor:</label>
                            <select id="setor" name="setor" class="form-select" required>
                                <option value="">Escolha uma opção...</option>
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
                                <option value="Recursos Humanos">Recursos Humanos</option>
                                <option value="Recebimento">Recebimento</option>
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
                            <input type="text" name="nf" class="form-control" placeholder="Digite o número da NF">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Data da Compra:</label>
                            <input type="date" name="data_compra" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Nome do Usuário:</label>
                            <input type="text" name="nome_usuario" class="form-control" placeholder="Nome do colaborador" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted fw-semibold small mb-1">Nome da Máquina (Hostname):</label>
                                <input type="text" name="nome_maquina" class="form-control" placeholder="Ex: NOTE-TI-01">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted fw-semibold small mb-1">Tipo de Máquina:</label>
                                <select id="tipo" name="tipo" class="form-select" required>
                                    <option value="">Selecione...</option>
                                    <option value="Laptop">Laptop</option>
                                    <option value="Desktop">Desktop</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted fw-semibold small mb-1">Anexar Nota Fiscal (PDF ou Imagem):</label>
                            <input class="form-control" type="file" name="arquivo" id="upload">
                            <div class="form-text text-muted">Tamanho máximo permitido: 2MB.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-4 mb-5">
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold shadow-sm rounded-3">
                    <i class="bi bi-plus-circle me-1"></i> Adicionar Nova Máquina ao Sistema
                </button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    document.getElementById("upload").addEventListener("change", function(e) {
        var upload = e.target;
        if (upload.files && upload.files[0]) {
            var size = upload.files[0].size;
            // Limite de 2MB (2 * 1024 * 1024 bytes)
            if (size > 2097152) {
                alert('Tamanho do arquivo excedeu o limite de 2MB!');
                upload.value = ""; // Reseta o campo
            }
        }
    });
</script>
</body>
</html>