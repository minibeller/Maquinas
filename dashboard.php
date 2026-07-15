<?php
include_once 'menu.php';
include_once 'conexao.php';

// --- 1. CONSULTAS DE CONTAGEM (BACKGROUND) ---

// Total de Máquinas
$sql_total = "SELECT COUNT(id_maquina) as total FROM maquina";
$res_total = $link->query($sql_total);
$total_maquinas = ($res_total && $row = $res_total->fetch_assoc()) ? intval($row['total']) : 0;

// Total de Desktops
$sql_desk = "SELECT COUNT(id_maquina) as total FROM maquina WHERE tipo = 'desktop'";
$res_desk = $link->query($sql_desk);
$total_desktops = ($res_desk && $row = $res_desk->fetch_assoc()) ? intval($row['total']) : 0;

// Total de Laptops
$sql_lap = "SELECT COUNT(id_maquina) as total FROM maquina WHERE tipo = 'Laptop'";
$res_lap = $link->query($sql_lap);
$total_laptops = ($res_lap && $row = $res_lap->fetch_assoc()) ? intval($row['total']) : 0;

// Total Windows 10 Pro
$sql_w10 = "SELECT COUNT(id_maquina) as total FROM maquina WHERE operacional = 'WINDOWS 10 PRO'";
$res_w10 = $link->query($sql_w10);
$total_w10 = ($res_w10 && $row = $res_w10->fetch_assoc()) ? intval($row['total']) : 0;

// Total Windows 11 Pro
$sql_w11 = "SELECT COUNT(id_maquina) as total FROM maquina WHERE operacional = 'WINDOWS 11 PRO'";
$res_w11 = $link->query($sql_w11);
$total_w11 = ($res_w11 && $row = $res_w11->fetch_assoc()) ? intval($row['total']) : 0;

// Total CALs de Acesso
$sql_cals = "SELECT COUNT(id_licenciamento) as total FROM licenciamento WHERE nome_licenciamento = 'Cals de Acesso SQL Server & Cals de Acesso Windows'";
$res_cals = $link->query($sql_cals);
$total_cals = ($res_cals && $row = $res_cals->fetch_assoc()) ? intval($row['total']) : 0;

// Total de Licenças Office (para base de cálculo das porcentagens de Office)
$sql_total_office = "SELECT COUNT(id_licenciamento) as total FROM licenciamento WHERE nome_licenciamento LIKE '%Office%'";
$res_total_office = $link->query($sql_total_office);
$total_offices = ($res_total_office && $row = $res_total_office->fetch_assoc()) ? intval($row['total']) : 0;
?>

<style>
    body { background-color: #f4f6f9 !important; }
    /* Adiciona borda superior colorida e grossa nos cards */
    .card-vibrante-azul { border-top: 5px solid #0d6efd !important; }
    .card-vibrante-ciano { border-top: 5px solid #0dcaf0 !important; }
    .card-vibrante-laranja { border-top: 5px solid #fd7e14 !important; }
    .card-vibrante-indigo { border-top: 5px solid #6610f2 !important; }
    .card-vibrante-verde { border-top: 5px solid #198754 !important; }
    .card-vibrante-vermelho { border-top: 5px solid #dc3545 !important; }

    /* Força os ícones e seus fundos a terem cores sólidas e super nítidas */
    .icon-box-azul { background-color: #0d6efd !important; color: white !important; }
    .icon-box-ciano { background-color: #0dcaf0 !important; color: white !important; }
    .icon-box-laranja { background-color: #fd7e14 !important; color: white !important; }
    .icon-box-indigo { background-color: #6610f2 !important; color: white !important; }
    .icon-box-verde { background-color: #198754 !important; color: white !important; }
    .icon-box-vermelho { background-color: #dc3545 !important; color: white !important; }

    /* Gradientes nas barras de progresso para dar um visual moderno e premium */
    .progress-bar-gradient-azul { background: linear-gradient(90deg, #0d6efd, #0dcaf0) !important; }
    .progress-bar-gradient-verde { background: linear-gradient(90deg, #198754, #a3cfbb) !important; }
</style>

<div class="container py-4">
    <div class="pb-3 mb-4 border-bottom border-2 border-secondary-subtle">
        <span class="text-primary text-uppercase fs-7 fw-bold">Painel Operacional</span>
        <h1 class="h2 mb-0 text-dark fw-bold">Dashboard de Máquinas & Licenciamento</h1>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow rounded-3 card-vibrante-azul">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-muted text-uppercase fw-bold small mb-2">Total de Máquinas</h6>
                            <h1 class="display-5 mb-0 fw-bold text-dark"><?php echo $total_maquinas; ?></h1>
                        </div>
                        <div class="icon-box-azul rounded-circle p-3 shadow-sm">
                            <i class="bi bi-pc-display fs-2 d-flex"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow rounded-3 card-vibrante-ciano">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-muted text-uppercase fw-bold small mb-2">Total Desktops</h6>
                            <h1 class="display-5 mb-0 fw-bold text-dark"><?php echo $total_desktops; ?></h1>
                        </div>
                        <div class="icon-box-ciano rounded-circle p-3 shadow-sm">
                            <i class="bi bi-display fs-2 d-flex"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow rounded-3 card-vibrante-laranja">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-muted text-uppercase fw-bold small mb-2">Total Laptops</h6>
                            <h1 class="display-5 mb-0 fw-bold text-dark"><?php echo $total_laptops; ?></h1>
                        </div>
                        <div class="icon-box-laranja rounded-circle p-3 shadow-sm">
                            <i class="bi bi-laptop fs-2 d-flex"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card border-0 shadow rounded-3 card-vibrante-indigo">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-muted text-uppercase fw-bold small mb-2">Windows 10 Pro</h6>
                            <h1 class="display-5 mb-0 fw-bold text-dark"><?php echo $total_w10; ?></h1>
                        </div>
                        <div class="icon-box-indigo rounded-circle p-3 shadow-sm">
                            <i class="bi bi-microsoft fs-2 d-flex"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow rounded-3 card-vibrante-verde">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-muted text-uppercase fw-bold small mb-2">Windows 11 Pro</h6>
                            <h1 class="display-5 mb-0 fw-bold text-dark"><?php echo $total_w11; ?></h1>
                        </div>
                        <div class="icon-box-verde rounded-circle p-3 shadow-sm">
                            <i class="bi bi-windows fs-2 d-flex"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow rounded-3 card-vibrante-vermelho">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-muted text-uppercase fw-bold small mb-2">CALs de Acesso</h6>
                            <h1 class="display-5 mb-0 fw-bold text-dark"><?php echo $total_cals; ?></h1>
                        </div>
                        <div class="icon-box-vermelho rounded-circle p-3 shadow-sm">
                            <i class="bi bi-key fs-2 d-flex"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-lg-6">
            <div class="card border-0 shadow rounded-3 h-100">
                <div class="card-header bg-white border-0 pt-4 pb-2">
                    <h5 class="card-title fw-extrabold text-primary text-uppercase m-0">
                        <i class="bi bi-box-seam me-2 text-primary"></i>Licenciamento Microsoft Office
                    </h5>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover">
                        <thead class="table-primary text-uppercase fs-7">
                            <tr>
                                <th class="ps-4 py-3">Versão</th>
                                <th class="text-center py-3">Qtd</th>
                                <th class="pe-4 text-center py-3" style="width: 40%;">Porcentagem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $versoes_office = [
                                "Home & Business 2016" => "Microsoft Office Home & Business 2016 Microsoft",
                                "Home & Business 2019" => "Microsoft Office Home & Business 2019 Microsoft",
                                "Home & Business 2021" => "Microsoft Office Home & Business 2021 Microsoft",
                                "H&B Perpétuo 2016 DVD" => "Office Home & Business perpétuo 2016 em DVD"
                            ];

                            foreach ($versoes_office as $label => $nome_banco) {
                                $sql_v = "SELECT COUNT(id_licenciamento) as qtd FROM licenciamento WHERE nome_licenciamento = '$nome_banco'";
                                $res_v = $link->query($sql_v);
                                $qtd = ($res_v && $row = $res_v->fetch_assoc()) ? intval($row['qtd']) : 0;
                                $pct = ($total_offices > 0) ? round(($qtd / $total_offices) * 100, 1) : 0;
                                ?>
                                <tr>
                                    <td class="ps-4 fw-bold text-dark"><?php echo $label; ?></td>
                                    <td class="text-center">
                                        <span class="badge bg-primary fs-6 px-3 py-1.5 rounded-pill"><?php echo $qtd; ?></span>
                                    </td>
                                    <td class="pe-4">
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1" style="height: 10px;">
                                                <div class="progress-bar progress-bar-gradient-azul rounded" role="progressbar" style="width: <?php echo $pct; ?>%" aria-valuenow="<?php echo $pct; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="ms-3 text-dark fw-bold small" style="min-width: 50px; text-align: right;"><?php echo $pct; ?>%</span>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-0 shadow rounded-3 h-100">
                <div class="card-header bg-white border-0 pt-4 pb-2">
                    <h5 class="card-title fw-extrabold text-success text-uppercase m-0">
                        <i class="bi bi-diagram-3 me-2 text-success"></i>Setores com mais Máquinas
                    </h5>
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover">
                        <thead class="table-success text-uppercase fs-7">
                            <tr>
                                <th class="ps-4 py-3">Nome Setor</th>
                                <th class="text-center py-3">Qtd Ativos</th>
                                <th class="pe-4 text-center py-3" style="width: 40%;">Porcentagem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_setores = "SELECT setor, COUNT(*) AS quantidade_maquinas FROM maquina GROUP BY setor ORDER BY quantidade_maquinas DESC LIMIT 4";
                            $result_setores = $link->query($sql_setores);

                            if ($result_setores && $result_setores->num_rows > 0) {
                                while ($row_setor = $result_setores->fetch_assoc()) {
                                    $setor = !empty($row_setor['setor']) ? $row_setor['setor'] : "Não Definido";
                                    $qtd_maquina = intval($row_setor['quantidade_maquinas']);
                                    $pct_setor = ($total_maquinas > 0) ? round(($qtd_maquina / $total_maquinas) * 100, 1) : 0;
                                    ?>
                                    <tr>
                                        <td class="ps-4 fw-bold text-dark"><?php echo htmlspecialchars($setor); ?></td>
                                        <td class="text-center">
                                            <span class="badge bg-success fs-6 px-3 py-1.5 rounded-pill"><?php echo $qtd_maquina; ?></span>
                                        </td>
                                        <td class="pe-4">
                                            <div class="d-flex align-items-center">
                                                <div class="progress flex-grow-1" style="height: 10px;">
                                                    <div class="progress-bar progress-bar-gradient-verde rounded" role="progressbar" style="width: <?php echo $pct_setor; ?>%" aria-valuenow="<?php echo $pct_setor; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ms-3 text-dark fw-bold small" style="min-width: 50px; text-align: right;"><?php echo $pct_setor; ?>%</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<tr><td colspan='3' class='text-center py-4 text-muted'>Nenhum setor cadastrado.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>