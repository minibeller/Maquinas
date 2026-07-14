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

$sql2 = "select * from licenciamento where maquina_id_maquina = $id_maquina";
$result2 = $link->query($sql2);



?>

<div class='rounded bg-light '> 
    <div class='row'>
        <div class='col-1'></div>
        <div class="">
            <h1 class='text-center mb-4 mt-5' >Visualiza Máquina</h1>
        </div>
        <div class='col-1'></div>
    </div>
    <div class="row  ">
        <div class="col-1"></div>
        <div class="col-5 mt-5 ">
            <div class="input-group-sm mb-1">
                <label class="form-label">SERVICE TAG / SERIAL:</label>
                <input type="text" name='serial' class="form-control" placeholder="<?php echo $serial ?>" disabled>
            </div>
            <div class="input-group-sm mb-1">
                <label class="form-label">Endereço IP:</label>
                <input type="text" name='ip' class="form-control" placeholder="<?php echo $ip ?>" disabled>
            </div>
            <div class="input-group-sm mb-1">
                <label class="form-label">Modelo:</label>
                <input type="text" name='modelo' class="form-control" placeholder="<?php echo $modelo ?>" disabled>
            </div>
            <div class="input-group-sm mb-1">
                <label class="form-label">Sistema Operacional:</label>
                <input type="text" name='operacional' class="form-control" placeholder="<?php echo $operacional ?>" disabled>
            </div>
            <div class="input-group-sm mb-1">
                <label class="form-label">Processador:</label>
                <input type="text" name='processador' class="form-control" placeholder="<?php echo $processador ?>" disabled>
            </div>
            <div class="input-group-sm mb-1">
                <label class="form-label">Memória Ram:</label>
                <input type="text" name='ram' class="form-control" placeholder="<?php echo $ram ?>" disabled>
            </div>
            <div class="input-group-sm mb-1">
                <label class="form-label">Armazenamento:</label>
                <input type="text" name='armazenamento' class="form-control" placeholder="<?php echo $armazenamento ?>" disabled>
            </div>


        </div>
        <div class='col-5 bg-light mt-5 '>

            <div class="input-group-sm mb-1">
                <label class="form-label">Setor:</label>
                <input type="text" name='setor' class="form-control" placeholder="<?php echo $setor ?>" disabled>
            </div>
            <div class="input-group-sm mb-1">
                <label class="form-label">Número Nota Fiscal:</label>
                <input type="text" name='nf' class="form-control" placeholder="<?php echo $nf ?>" disabled>
            </div>
            <div class="input-group-sm mb-1">
                <label class="form-label">Data da Compra:</label>
                <input type="text" name='data_compra' class="form-control" placeholder="<?php echo $data_compra ?>" disabled>
            </div>
            <div class="input-group-sm mb-1">
                <label class="form-label">Nome do Usuário:</label>
                <input type="text" name='nome_usuario' class="form-control" placeholder="<?php echo $nome_usuario ?>" disabled>
            </div>
            <div class="input-group-sm mb-1">
                <label class="form-label">Nome da Máquina:</label>
                <input type="text" name='nome_maquina' class="form-control" placeholder="<?php echo $nome_maquina ?>" disabled>
            </div>
            <div class="input-group-sm mb-1">
                <label class="form-label">Tipo da Máquina:</label>
                <input type="text" name='tipo' class="form-control" placeholder="<?php echo $tipo ?>" disabled>
            </div>


        </div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-5 bg-light ">
            <label class="form-label">Observações:</label>
            <div class="form-floating">
                <textarea class="form-control w-100" style="height: 200px" disabled><?php echo $observacao ?></textarea>

            </div>
        </div>
        <div class="col-5 bg-light ">
            <label class="form-label">Manutenções:</label>
            <div class="form-floating">
                <textarea class="form-control w-100" valeu style="height: 200px" disabled><?php echo $manutencao ?></textarea>

            </div>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 bg-light">
            <label class="form-label mt-3">Licenciamento:</label>

            <div class="form-floating">
            
                <?php

                if ($result2->num_rows > 0) {
                    // output data of each row 

                    while ($row2 = $result2->fetch_assoc()) {
                        $id_licenciamento = $row2['id_licenciamento'];
                        $nome_licenciamento = $row2['nome_licenciamento'];
                        $arquivo = $row2['arquivo'];


                        echo  $nome_licenciamento . "<a  href='upload/" . $arquivo . "' type='button'  style='--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;' class='btn  btn btn-link ' target='_blank '>Visualizar Nota Fiscal em Anexo</a></i> <a href='apagar_licenciamento_maquina.php?id_licenciamento=".$id_licenciamento."' class='text-end'><svg xmlns'http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                          <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
                          <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
                        </svg></a>  <br>";
                    }
                } else {
                    echo "0 results";
                }

                ?>
            </div>
            <div class="row">
                <div class="col-12">
                     <a type="button" href='editar_licenciamento_maquina.php?id_maquina=<?php echo $id_maquina; ?>' class="btn w-100 btn-info mt-3">Editar Licenciamento</a>
                </div>
                
            </div>
            
           
            
        </div>

        <div class="col-1"></div>
    </div>

    <div class="row">
        <div class="col-1"></div>
        <div class="col-8">
            <label class="form-label mt-2 mb-0">Nota fiscal de compra:</label><br>
            
            <?php
            
                    $sql3 = "select arquivo FROM maquina
                    where id_maquina = $id_maquina";

                    $result3 = $link->query($sql3);

                    if ($result3->num_rows > 0) {                        

                        // output data of each row
                        while ($row3 = $result3->fetch_assoc()) {
                               $arquivo_nota = $row3['arquivo'];
                    
                             echo "<a  href='upload/" . $arquivo_nota . "' type='button'  style='--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;' class='btn  btn btn-link ' target='_blank '>Visualizar Nota Fiscal em Anexo</a>";
                        }
                    } else {
                        echo "0 results";
                    }
            
            
            
            
        /*    if (!empty($arquivo_nota)) {
               
            } else {
            }*/
            ?>
        </div>
        <div class='col-1'></div>
    </div>

    <div class="row mb-5 mt-5">
        <div class='col-1'>

        </div>
        <div class='col-5'>
            <a type="button" href='editar_maquina.php?id_maquina=<?php echo $id_maquina; ?>' class="btn w-100 btn-warning">Editar Máquina</a>
        </div>
        <div class='col-5 mb-5'>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger w-100 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                Excluir Máquina
            </button>

            <!-- Modal -->
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Máquina</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Você realmente deseja apagar esta máquina e todo seu histórico?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                            <a type="button" href='excluir_maquina.php?id_maquina=<?php echo $id_maquina; ?>' class="btn  btn-danger">Excluir Máquina</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class='col-1'>

        </div>
    </div>
</div>