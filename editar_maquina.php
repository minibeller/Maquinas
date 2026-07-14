<?php
include 'menu.php';
include 'conexao.php';

$id_maquina = $_GET["id_maquina"];


$sql = "select * FROM maquina
where id_maquina = $id_maquina";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $serial = $row['serial'];
        $ip = $row['ip'];
        $modelo = $row['modelo'];
        $tipo = $row['tipo'];
        $operacional = $row['operacional'];
        $processador = $row['processador'];
        $ram = $row['ram'];
        $armazenamento = $row['armazenamento'];
        $nf = $row['nf'];
        $data_compra = $row['data_compra'];
        $nome_usuario = $row['nome_usuario'];
        $nome_maquina = $row['nome_maquina'];
        $setor = $row['setor'];
        $observacao = $row['observacao'];
        $manutencao = $row['manutencao'];
    }
} else {
    echo "0 results";
}

?>

<div class='rounded bg-light '>
    <form action="salva_editar_maquina.php" method="POST">
        <div class='row'>
            <div class='col-1'></div>
            <div class="">
                <h1 class='text-center mb-4 mt-5'>Edita Máquina</h1>                
            </div>
            <div class='col-1'></div>
        </div>
        <div class="row mt-5">
            <div class="col-1"></div>
            <div class="col-5 bg-light mt-5">
            <div class="input-group-sm mb-1">
                    <input type="hidden" name='id_maquina' class="form-control" value="<?php echo $id_maquina ?>" >
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">SERVICE TAG / SERIAL:</label>
                    <input type="text" name='serial' class="form-control" value="<?php echo $serial ?>" >
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Endereço IP:</label>
                    <input type="text" name='ip' class="form-control" value="<?php echo $ip ?>" >
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Modelo:</label>
                    <input type="text" name='modelo' class="form-control" value="<?php echo $modelo ?>" >
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Sistema Operacional:</label>
                    <input type="text" name='operacional' class="form-control" value="<?php echo $operacional ?>" >
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Processador:</label>
                    <input type="text" name='processador' class="form-control" value="<?php echo $processador ?>" >
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Memória Ram:</label>
                    <input type="text" name='ram' class="form-control" value="<?php echo $ram ?>" >
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Armazenamento:</label>
                    <input type="text" name='armazenamento' class="form-control" value="<?php echo $armazenamento ?>" >
                </div>


            </div>
            <div class='col-5 bg-light mt-5'>            
                <div class="input-group-sm mb-1">
                    <label class="form-label">Setor</label>
                    <select id="setor" name='setor' class="form-select">
                        <option value="<?php echo $setor ?>"><?php echo $setor ?></option>
                        <option value="Atendimento">Atendimento</option>
                        <option value="Comercial">Comercial</option>
                        <option value="Compras">Compras </option>
                        <option value="Diretoria">Diretoria </option>
                        <option value="Expedição">Expedição</option>
                        <option value="Faturamento">Faturamento</option>
                        <option value="Financeiro">Financeiro</option>
                        <option value="Fiscal">Fiscal</option>
                        <option value="Farmacia">Farmacia</option>
                        <option value="Logística">Logística</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Recebimento">Recebimento</option>
                        <option value="Recursos Humanos">Recursos Humanos</option>
                        <option value="Tecnologia da Informação">Tecnologia da Informação</option>
                        <option value="Televendas">Televendas</option>
                        <option value="Máquinas Descontinuadas">Máquinas Descontinuadas</option>
                         <option value="E-commerce">E-commerce</option>
                         <option value="Análise de dados">Análise de dados</option>
                        
                    </select>
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Número Nota Fiscal:</label>
                    <input type="text" name='nf' class="form-control" value="<?php echo $nf ?>" >
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Data da Compra:</label>
                    <input type="text" name='data_compra' class="form-control" value="<?php echo $data_compra ?>" >
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Nome do Usuário:</label>
                    <input type="text" name='nome_usuario' class="form-control" value="<?php echo $nome_usuario ?>" >
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Nome da Máquina:</label>
                    <input type="text" name='nome_maquina' class="form-control" value="<?php echo $nome_maquina ?>" >
                </div>         
                <div class="input-group-sm mb-1">
                    <label class="form-label">Tipo da Máquina</label>
                    <select id="tipo" name='tipo' class="form-select">
                        <option value="<?php echo $tipo ?>"><?php echo $tipo ?></option>
                        <option value="Laptop">Laptop</option>
                        <option value="Desktop">Desktop</option>
                    </select>
                </div>

            </div>
            <div class="col-1"></div>
        </div>
        <div class="row ">
            <div class="col-1"></div>
            <div class="col-5 bg-light ">
                <label class="form-label">Observações:</label>
                <div class="form-floating">
                    <textarea class="form-control w-100" value='<?php echo $observacao ?>' name="observacao" style="height: 200px;w" ><?php echo $observacao ;?></textarea>
                    <label for="floatingTextarea2"></label>
                </div>
            </div>
            <div class="col-5 bg-light">
                <label class="form-label">Manutenções:</label>
                <div class="form-floating">
                    <textarea class="form-control w-100" value='<?php echo $manutencao ?>' name="manutencao" style="height: 200px" ><?php echo $manutencao ?></textarea>
                    <label for="floatingTextarea2"></label>
                </div>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row mb-5 mt-5">
            <div class='col-1'>

            </div>
            <div class='col-5'>
                <button type="submit" class="btn w-100 mb-5 btn-success">Salvar Máquina</button>
            </div>
            
            <div class='col-1'>

            </div>
        </div>
    </form>
</div>