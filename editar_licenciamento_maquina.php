<?php
include 'menu.php';
include 'conexao.php';

$id_maquina = $_GET["id_maquina"];

$sql = "select * FROM maquina
where id_maquina = $id_maquina";

$result = $link->query($sql);
?>


<div class='rounded bg-light '>
    <div class='row'>
        <div class='col-1'></div>
        <div class="">
            <h1 class='text-center mb-4 mt-5' >Adicionar Licenciamento na Máquina</h1>
        </div>
        <div class='col-1'></div>
    </div>
    <form action="salvar_licenciamento_maquina.php" method="POST"  enctype="multipart/form-data">
        <input type="hidden" id="id_maquina" name="id_maquina" value="<?php echo $id_maquina; ?>">
        <div class="row ">
            <div class="col-1"></div>
            <div class="col-10">
                <select class="form-select mt-5" size="5" name='nome_licenciamento' aria-label="Size 3 select example">
                    <option selected>Selecione o tipo de Licença</option>
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
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-10 bg-light">
                <div class="input-group-sm mb-1 mt-3">
                    <label class="form-label">Anexar Nota Fiscal jpg,jpeg,gif e png</label>
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
                    <button type="submit " class="btn btn-primary  mb-5 w-100  mt-3 btn-sm">Adicionar Nova Máquina </button>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </form>
</div>
