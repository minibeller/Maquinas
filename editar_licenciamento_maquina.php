<?php
include_once 'menu.php';
include_once 'conexao.php';

// Proteção básica para o ID da máquina recebido via GET
$id_maquina = isset($_GET["id_maquina"]) ? intval($_GET["id_maquina"]) : 0;

// Busca informações da máquina para exibir no topo de forma informativa
$sql = "SELECT nome_maquina, nome_usuario, setor, ip FROM maquina WHERE id_maquina = $id_maquina";
$result = $link->query($sql);
$nome_maquina = $nome_usuario = $setor = $ip = "";

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nome_maquina = $row['nome_maquina'];
    $nome_usuario = $row['nome_usuario'];
    $setor        = $row['setor'];
    $ip           = $row['ip'];
}
?>

<div class="container py-4">
    <div class="d-flex align-items-center justify-content-between pb-3 mb-4 border-bottom">
        <div>
            <span class="text-muted text-uppercase fs-7 fw-bold">Licenciamento de Software</span>
            <h1 class="h2 mb-0 text-dark fw-bold">Vincular Licença à Máquina</h1>
        </div>
        <a href="visualiza_maquina.php?id_maquina=<?php echo $id_maquina; ?>" class="btn btn-sm btn-outline-secondary rounded-pill px-3">
            <i class="bi bi-arrow-left me-1"></i> Voltar à Máquina
        </a>
    </div>

    <?php if (!empty($nome_usuario)): ?>
    <div class="alert alert-secondary border-0 shadow-sm d-flex flex-wrap align-items-center justify-content-between p-3 mb-4 rounded-3">
        <div class="d-flex align-items-center">
            <div class="bg-primary text-white rounded-circle p-2 me-3">
                <i class="bi bi-pc-display fs-5 d-flex"></i>
            </div>
            <div>
                <h6 class="mb-0 fw-bold text-dark"><?php echo htmlspecialchars($nome_maquina); ?> (<?php echo htmlspecialchars($nome_usuario); ?>)</h6>
                <span class="small text-muted">Setor: <?php echo htmlspecialchars($setor); ?></span>
            </div>
        </div>
        <span class="badge bg-dark text-white px-3 py-2 rounded-pill mt-2 mt-sm-0">IP: <?php echo htmlspecialchars($ip); ?></span>
    </div>
    <?php endif; ?>

    <form action="salvar_licenciamento_maquina.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" id="id_maquina" name="id_maquina" value="<?php echo $id_maquina; ?>">

        <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-header bg-white border-0 pt-4 pb-2">
                        <h5 class="card-title m-0 text-secondary fw-bold">
                            <i class="bi bi-shield-lock me-2 text-primary"></i>Escolha o Licenciamento & Comprovante
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="form-label text-muted fw-semibold small mb-2">Selecione o tipo de Licença:</label>
                            <select class="form-select" size="6" name="nome_licenciamento" required>
                                <option value="" disabled selected>Selecione uma licença da lista...</option>
                                <option value="Microsoft Office Home & Business 2016 Microsoft">Microsoft Office Home & Business 2016 Microsoft</option>
                                <option value="Microsoft Office Home & Business 2019 Microsoft">Microsoft Office Home & Business 2019 Microsoft</option>
                                <option value="Microsoft Office Home & Business 2021 Microsoft">Microsoft Office Home & Business 2021 Microsoft</option>
                                <option value="Microsoft Office Home & Business 2024 Microsoft">Microsoft Office Home & Business 2024 Microsoft</option>
                                <option value="Office Home & Business perpétuo 2016 em DVD">Office Home & Business perpétuo 2016 em DVD</option>
                                <option value="Cals de Acesso SQL Server & Cals de Acesso Windows">Cals de Acesso SQL Server & Cals de Acesso Windows</option>
                                <option value="Windows Nota fiscal por Volume">Windows Nota fiscal por Volume</option>
                                <option value="Corel Draw">Corel Draw</option>
                                <option value="Pacote Adobe">Pacote Adobe</option>
                                <option value="Windows Nota fiscal Própria">Windows Nota fiscal Própria</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-muted fw-semibold small mb-1">Anexar Nota Fiscal (Formatos: JPG, JPEG, GIF, PNG ou PDF):</label>
                            <input class="form-control" type="file" name="arquivo" id="upload" required>
                            <div class="form-text text-muted">Tamanho máximo permitido: 2MB.</div>
                        </div>

                        <div class="pt-2">
                            <button type="submit" class="btn btn-primary w-100 py-2.5 fw-bold shadow-sm rounded-3">
                                <i class="bi bi-check-circle me-1"></i> Vincular Licença à Máquina
                            </button>
                        </div>
                    </div>
                </div>
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
                upload.value = ""; // Reseta o campo de upload
            }
        }
    });
</script>
</body>
</html>