<?php
$nome = $_POST['nome'];
include_once 'menu.php';
include_once 'conexao.php';
$sql = "SELECT * FROM maquina WHERE nome_usuario like '%$nome%' ORDER BY nome_usuario";
$result = $link->query($sql);

?>



    
<div class='rounded bg-light  mb-5'>    
    <div class='row'>
        <div class='col-1'></div>
        <div class="">
            <h1 class='text-center mb-4 mt-5' >PESQUISA MAQUINAS MANTIQUEIRA</h1>        
        </div>
        <div class='col-1'></div>
    </div>

    <div class="row ">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-bordered table table-hover ">
                <thead>
                    <tr>
                        <th scope="col">SERVICE TAG</th>
                        <th scope="col">Endereço IP</th>
                        <th scope="col">Modelo Máquina</th>
                        <th scope="col">Sistema Operacional</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Visualizar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {                          
                          echo " <tr>
                          <th scope='row'>" . $row["serial"]. "</th>
                          <td>" . $row["ip"]. "</td>
                          <td>" . $row["modelo"]. "</td>
                          <td>" . $row["operacional"]. "</td>
                          <td>" . $row["nome_usuario"]. "</td>
                          <td>" . $row["setor"]. "</td>
                          <td><a type='button' href='visualiza_maquina.php?id_maquina=" . $row["id_maquina"] . "'  class='btn btn-info btn-sm w-100'>Visualizar</a></td>
                         
                      
                      </tr>";
                        }
                      } else {
                        echo "0 results";
                      }
                    ?>
                   
                </tbody>
            </table>

        </div>
        <div class="col-1"></div>
    </div>
</div>
</body>

</html>
