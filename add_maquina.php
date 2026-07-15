<?php
include_once 'menu.php';
include_once 'conexao.php';
?>




<div class='rounded bg-light  mb-5'>
    <div class='row'>
            <div class='col-1'></div>
            <div class="">
                <h1 class='text-center mb-4 mt-5' >Adicionar Nova Máquina</h1>
            </div>
            <div class='col-1'></div>
    </div>
    <form action="salva_maquina.php" method="POST" enctype="multipart/form-data">
        <div class="row ">
            <div class="col-1"></div>
            <div class="col-5 mt-5 bg-light">
                <div class="input-group-sm mb-1">
                    <label class="form-label">SERVICE TAG / SERIAL:</label>
                    <input type="text" name='serial' class="form-control" placeholder="SERVICE TAG / SERIAL">
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Endereço IP:</label>
                    <input type="text" name='ip' class="form-control" placeholder="Endereço IP">
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Modelo:</label>
                    <input type="text" name='modelo' class="form-control" placeholder="Modelo">
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Sistema Operacional:</label>
                    <input type="text" name='operacional' class="form-control" placeholder="Sistema Operacional">
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Processador:</label>
                    <input type="text" name='processador' class="form-control" placeholder="Processador">
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Memória Ram:</label>
                    <input type="text" name='ram' class="form-control" placeholder="Memória Ram">
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Armazenamento:</label>
                    <input type="text" name='armazenamento' class="form-control" placeholder="Armazenamento">
                </div>
            </div>
            <div class='col-5 bg-light'>

                <div class="input-group-sm mt-5 mb-1">
                    <label class="form-label">Selecione o Setor</label>
                    <select id="setor" name='setor' class="form-select">
                        <option value="">Selecione</option>
                        <option value="Atendimento">Atendimento</option>
                        <option value="Comercial">Comercial</option>
                        <option value="Compras">Compras </option>                        
                        <option value="Diretoria">Diretoria </option>
                        <option value="Expedição">Expedição</option>
                        <option value="Faturamento">Faturamento</option>
                        <option value="Financeiro">Financeiro</option>
                        <option value="Fiscal">Fiscal</option>
                        <option value="Farmacia">farmacia</option>
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
                <div class="input-group-sm mb-1">
                    <label class="form-label">Número Nota Fiscal:</label>
                    <input type="text" name='nf' class="form-control" placeholder="Número Nota Fiscal">
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Data da Compra:</label>
                    <input type="date" name='data_compra' class="form-control" placeholder="Data da Compra">
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Nome do Usuário:</label>
                    <input type="text" name='nome_usuario' class="form-control" placeholder="Nome do Usuário">
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Nome da Máquina:</label>
                    <input type="text" name='nome_maquina' class="form-control" placeholder="Nome da Máquina">
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Selecione o tipo da Máquina</label>
                    <select id="tipo" name='tipo' class="form-select">
                        <option>Selecione</option>
                        <option>Laptop</option>
                        <option>Desktop</option>
                    </select>
                </div>
                <div class="input-group-sm mb-1">
                    <label class="form-label">Anexar Nota Fiscal </label>
                    <input class="form-control" type="file" name="arquivo" id="upload">
                    <script type="text/javascript">
                        var upload = document.getElementById("upload");
                        upload.addEventListener("change", function(e) {
                            var size = upload.files[0].size;
                            if (size < 2048576) { //1MB         
                                alert('Imagem anexada com sucesso!'); //Abaixo do permitido
                            } else {
                                alert('Tamanho da imagem excedeu o limite!'); //Acima do limite
                                upload.value = ""; //Limpa o campo          
                            }
                            e.preventDefault();
                        });
                    </script>
                </div>
            </div>

        </div>             
        <div class="row ">
            <div class='col-1'></div>
            <div class="col-10 text-center rounded bg-light  ">
                <button type="submit " class="btn btn-primary  mb-3 w-100  mt-5 btn-sm">Adicionar Nova Máquina </button>
            </div>
            <div class='col-1'></div>
        </div>

    </form>
</div>

</body>

</html>