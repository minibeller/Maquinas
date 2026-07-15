<?php
include_once 'menu.php';
include_once 'conexao.php';

// Consulta inteligente: Seleciona a máquina e CONTA quantas licenças ela tem associadas
$sql = "SELECT m.*, COUNT(l.id_licenciamento) as total_licencas 
        FROM maquina m 
        LEFT JOIN licenciamento l ON l.maquina_id_maquina = m.id_maquina 
        GROUP BY m.id_maquina 
        ORDER BY m.setor";

$result = $link->query($sql);

// Conta o total de máquinas cadastradas para exibir no topo
$total_maquinas = $result ? $result->num_rows : 0;
?>

<div class="container py-4">
    <div class="row align-items-center mb-4">
        <div class="col-md-8 text-center text-md-start">
            <span class="text-muted text-uppercase fs-7 fw-bold">Painel de Controle</span>
            <h1 class="h2 mb-0 text-dark fw-bold">MÁQUINAS MANTIQUEIRA</h1>
        </div>
        <div class="col-md-4 text-center text-md-end mt-3 mt-md-0">
            <div class="d-inline-block bg-white p-3 rounded shadow-sm border border-light">
                <span class="text-muted small d-block">Total de Ativos</span>
                <span class="fs-4 fw-bold text-primary"><?php echo $total_maquinas; ?></span>
                <span class="text-muted small">máquinas</span>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-3 overflow-hidden mb-5">
        <div class="card-header bg-white border-bottom py-3">
            <h5 class="card-title m-0 text-secondary fw-bold">
                <i class="bi bi-list-task me-2"></i>Lista de Equipamentos & Conformidade
            </h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light text-uppercase fs-7 text-muted border-bottom">
                    <tr>
                        <th scope="col" class="ps-4 py-3">SERVICE TAG / SERIAL</th>
                        <th scope="col" class="py-3">Endereço IP</th>
                        <th scope="col" class="py-3">Modelo</th>
                        <th scope="col" class="py-3">Usuário</th>
                        <th scope="col" class="py-3">Setor</th>
                        <th scope="col" class="py-3 text-center">Status Licença</th> <th scope="col" class="pe-4 py-3 text-end">Ações</th>
                    </tr>
                </thead>
                <tbody class="border-top-0">
                    <?php
                    if ($total_maquinas > 0) {
                        while($row = $result->fetch_assoc()) {
                            $id_maquina     = $row["id_maquina"];
                            $serial         = $row["serial"];
                            $ip             = $row["ip"];
                            $modelo         = $row["modelo"];
                            $nome_usuario   = $row["nome_usuario"];
                            $setor          = $row["setor"];
                            $total_licencas = intval($row["total_licencas"]);
                            
                            // Define o Badge de Status com base na quantidade de licenças vinculadas
                            if ($total_licencas > 0) {
                                $status_badge = "<span class='badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill'>
                                                    <i class='bi bi-shield-fill-check me-1'></i> Licenciada ({$total_licencas})
                                                 </span>";
                            } else {
                                $status_badge = "<span class='badge bg-danger-subtle text-danger border border-danger-subtle px-3 py-2 rounded-pill'>
                                                    <i class='bi bi-shield-fill-exclamation me-1'></i> Sem Licença
                                                 </span>";
                            }
                            
                            echo "<tr>
                                <td class='ps-4 fw-bold text-dark'>" . htmlspecialchars($serial) . "</td>
                                <td><code class='text-muted'>" . htmlspecialchars($ip) . "</code></td>
                                <td class='text-secondary'>" . htmlspecialchars($modelo) . "</td>
                                <td class='fw-semibold text-secondary'>" . htmlspecialchars($nome_usuario) . "</td>
                                <td>
                                    <span class='badge bg-primary-subtle text-primary border border-primary-subtle'>" . htmlspecialchars($setor) . "</span>
                                </td>
                                <td class='text-center'>" . $status_badge . "</td> <td class='pe-4 text-end'>
                                    <a href='visualiza_maquina.php?id_maquina=" . $id_maquina . "' class='btn btn-sm btn-outline-primary px-3 rounded-pill fw-semibold'>
                                        <i class='bi bi-eye me-1'></i> Visualizar
                                    </a>
                                </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr>
                            <td colspan='7' class='text-center py-5 text-muted'>
                                <i class='bi bi-inbox fs-2 d-block mb-2'></i>
                                Nenhuma máquina encontrada no banco de dados.
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>