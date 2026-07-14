<?php
include 'menu.php';
include 'conexao.php';

?>
<div class='rounded bg-dark p-3 '> 
    <div class='row'>
        <div class='col-1'></div>
        <div class="">
            <h1 class='text-center mb-2 mt-2 text-light' >Dashboard Máquinas</h1>
        </div>
        <div class='col-1'></div>
    </div>
    
    <div class="row">
    <div class="col-md-4">                                <!-- Card -->
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-between">

                            <div>
                                <!-- Title -->
                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                    <span class="legend-circle-sm bg-success"></span>
                                    Quantidade de Máquinas
                                </h5>
                                <!-- Subtitle -->
                                <h2 class="mb-0">
                                    <?php
                                    $sql_maquinas= 'SELECT count(id_maquina) FROM maquinas.maquina';
                                    $result_maquinas = $link->query($sql_maquinas);
                                    if ($result_maquinas->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result_maquinas->fetch_assoc()) {
                                            $quantidade_maquinas = $row['count(id_maquina)']; 
                                            echo $quantidade_maquinas;                                                         
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>                                                       
                                </h2> 
                            </div>

                            <span class="text-primary">
                               <img src="img/mo%C3%A7a.png"height="32" width="32">
                            </span>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Card -->
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-between">

                            <div>
                                <!-- Title -->
                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                    <span class="legend-circle-sm bg-success"></span>
                                    Quantidade de Desktop
                                </h5>
                                <!-- Subtitle -->
                                <h2 class="mb-0">
                                    <?php
                                    $sql_maquinas= "SELECT count(id_maquina) FROM maquinas.maquina where tipo = 'desktop'";
                                    $result_maquinas = $link->query($sql_maquinas);
                                    if ($result_maquinas->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result_maquinas->fetch_assoc()) {
                                            $quantidade_maquinas = $row['count(id_maquina)']; 
                                            echo $quantidade_maquinas;                                                         
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>                                                       
                                </h2> 
                            </div>

                            <span class="text-primary">
                               <img src="img/pc.png"height="32" width="32">
                            </span>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <!-- Card -->
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-between">

                            <div>
                                <!-- Title -->
                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                    <span class="legend-circle-sm bg-success"></span>
                                    Quantidade de Laptop
                                </h5>
                                <!-- Subtitle -->
                                <h2 class="mb-0">
                                    <?php
                                    $sql_maquinas= "SELECT count(id_maquina) FROM maquinas.maquina where tipo = 'Laptop'";
                                    $result_maquinas = $link->query($sql_maquinas);
                                    if ($result_maquinas->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result_maquinas->fetch_assoc()) {
                                            $quantidade_maquinas = $row['count(id_maquina)']; 
                                            echo $quantidade_maquinas;                                                         
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>                                                       
                                </h2> 
                            </div>

                            <span class="text-primary">
                               <img src="img/computador-portatil.png"height="32" width="32">
                            </span>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>
        </div>
    </div>
      <div class="row mt-5">
    <div class="col-md-4">                                <!-- Card -->
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-between">

                            <div>
                                <!-- Title -->
                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                    <span class="legend-circle-sm bg-success"></span>
                                    Windows 10 Pro
                                </h5>
                                <!-- Subtitle -->
                                <h2 class="mb-0">
                                    <?php
                                    $sql_maquinas= "SELECT count(id_maquina) FROM maquinas.maquina where operacional = 'WINDOWS 10 PRO'";
                                    $result_maquinas = $link->query($sql_maquinas);
                                    if ($result_maquinas->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result_maquinas->fetch_assoc()) {
                                            $quantidade_maquinas = $row['count(id_maquina)']; 
                                            echo $quantidade_maquinas;                                                         
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>                                                       
                                </h2> 
                            </div>

                            <span class="text-primary">
                               <img src="img/janelas.png"height="32" width="32">
                            </span>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Card -->
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-between">

                            <div>
                                <!-- Title -->
                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                    <span class="legend-circle-sm bg-success"></span>
                                    windows 11 Pro
                                </h5>
                                <!-- Subtitle -->
                                <h2 class="mb-0">
                                    <?php
                                      $sql_maquinas= "SELECT count(id_maquina) FROM maquinas.maquina where operacional = 'WINDOWS 11 PRO'";
                                    $result_maquinas = $link->query($sql_maquinas);
                                    if ($result_maquinas->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result_maquinas->fetch_assoc()) {
                                            $quantidade_maquinas = $row['count(id_maquina)']; 
                                            echo $quantidade_maquinas;                                                         
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>                                                       
                                </h2> 
                            </div>

                            <span class="text-primary">
                               <img src="img/janelas.png"height="32" width="32">
                            </span>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Card -->
            <div class="card border-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col d-flex justify-content-between">

                            <div>
                                <!-- Title -->
                                <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                    <span class="legend-circle-sm bg-success"></span>
                                    Cals de Acesso SQL & Windows
                                </h5>
                                <!-- Subtitle -->
                                <h2 class="mb-0">
                                    <?php
                                      $sql_maquinas= "SELECT count(nome_licenciamento) FROM maquinas.licenciamento where nome_licenciamento = 'Cals de Acesso SQL Server & Cals de Acesso Windows'";
                                    $result_maquinas = $link->query($sql_maquinas);
                                    if ($result_maquinas->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result_maquinas->fetch_assoc()) {
                                            $quantidade_maquinas = $row['count(nome_licenciamento)']; 
                                            echo $quantidade_maquinas;                                                         
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>                                                       
                                </h2> 
                            </div>

                            <span class="text-primary">
                               <img src="img/janelas.png"height="32" width="32">
                            </span>
                        </div>
                    </div> <!-- / .row -->
                </div>
            </div>
        </div>
      
    </div>
    
   
    
    <div class='row mt-5'>
     
        
            <div class="col-6 d-flex ">

                        <!-- Card -->
                <div class="card border-0 flex-fill w-100" data-list="{&quot;valueNames&quot;: [&quot;name&quot;, &quot;price&quot;, &quot;quantity&quot;, &quot;amount&quot;, {&quot;name&quot;: &quot;sales&quot;, &quot;attr&quot;: &quot;data-sales&quot;}], &quot;page&quot;: 5}" id="topSellingProducts">
                    <div class="card-header border-0 card-header-space-between">

                        <!-- Title -->
                        <h2 class="card-header-title h4 text-uppercase">
                            Licenciamento Microsoft Office
                        </h2>                  
                  
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table align-middle table-edge table-nowrap mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>
                                        <a href="javascript: void(0);" class="text-muted list-sort" >
                                            Tipo de licenciamento
                                        </a>
                                    </th>
                                    <th class="text-center">
                                        <a href="javascript: void(0);" class="text-muted list-sort" >
                                            Quant de licenças 
                                        </a>
                                    </th>
                                
                                    <th class="text-center pe-7 min-w-200px">
                                        <a href="javascript: void(0);" class="text-muted list-sort" >
                                            Porcentagem
                                        </a>
                                    </th>
                                </tr>
                            
                            </thead>
                            <tbody class="list">
                                <?php 
                                $sql_tabela = "SELECT count(nome_licenciamento) FROM maquinas.licenciamento where nome_licenciamento like '%Office%';";
                                $result = $link->query($sql_tabela);


                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $quantidade_office = $row['count(nome_licenciamento)'];                                
                                    }
                                } else {
                                    echo "0 results";
                                }


                                $sql_tabela_1 = "SELECT count(nome_licenciamento) FROM maquinas.licenciamento where nome_licenciamento = 'Microsoft Office Home & Business 2016 Microsoft';";
                                $result1 = $link->query($sql_tabela_1);


                                if ($result1->num_rows > 0) {
                                    // output data of each row
                                    while ($row1 = $result1->fetch_assoc()) {
                                        
                                        
                                        $quantidade_office1 = $row1['count(nome_licenciamento)'];    
                                     
                                        $porcentagem = $quantidade_office - $quantidade_office1;
                                       
                                        echo '      <tr>
                                        <td class="name fw-bold"> Home & Business 2016 Microsoft</td>
                                        <td class="price text-center">'.$quantidade_office1.'</td>
                                        <td class="sales" >
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="progress d-flex flex-grow-1">
                                                    <div class="progress-bar" role="progressbar" style="width: '.$quantidade_office1.'%"  aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ms-3 text-muted">'.$quantidade_office1.'%</span>
                                            </div>
                                        </td>
                                    </tr>';
                                    }
                                } else {
                                    echo "0 results";
                                }


                                $sql_tabela_2 = "SELECT count(nome_licenciamento) FROM maquinas.licenciamento where nome_licenciamento = 'Microsoft Office Home & Business 2019 Microsoft';";
                                 $result2 = $link->query($sql_tabela_2);


                                if ($result2->num_rows > 0) {
                                    // output data of each row
                                    while ($row2 = $result2->fetch_assoc()) {
                                        $quantidade_office2 = $row2['count(nome_licenciamento)'];        
                                        
                                        $porcentagem = $quantidade_office - $quantidade_office2;
                                       
                                        echo '      <tr>
                                        <td class="name fw-bold">Home & Business 2019 Microsoft</td>
                                        <td class="price text-center">'.$quantidade_office2.'</td>
                                        <td class="sales" >
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="progress d-flex flex-grow-1">
                                                    <div class="progress-bar" role="progressbar" style="width: '.$quantidade_office2.'%"  aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ms-3 text-muted">'.$quantidade_office2.'%</span>
                                            </div>
                                        </td>
                                    </tr>';
                                    }
                                } else {
                                    echo "0 results";
                                }



                                $sql_tabela_3 = "SELECT count(nome_licenciamento) FROM maquinas.licenciamento where nome_licenciamento = 'Microsoft Office Home & Business 2021 Microsoft';";                            
                                 $result3 = $link->query($sql_tabela_3);


                                if ($result3->num_rows > 0) {
                                    // output data of each row
                                    while ($row3 = $result3->fetch_assoc()) {
                                        $quantidade_office3 = $row3['count(nome_licenciamento)'];          
                                              $quantidade_office3 = $row3['count(nome_licenciamento)'];        
                                        
                                        $porcentagem = $quantidade_office - $quantidade_office3;
                                       
                                        echo '      <tr>
                                        <td class="name fw-bold">Home & Business 2021 Microsoft</td>
                                        <td class="price text-center">'.$quantidade_office3.'</td>
                                        <td class="sales" >
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="progress d-flex flex-grow-1">
                                                    <div class="progress-bar" role="progressbar" style="width: '.$quantidade_office3.'%"  aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ms-3 text-muted">'.$quantidade_office3.'%</span>
                                            </div>
                                        </td>
                                    </tr>';
                                    }
                                    
                                } else {
                                    echo "0 results";
                                }
                                $sql_tabela_4 = "SELECT count(nome_licenciamento) FROM maquinas.licenciamento where nome_licenciamento = 'Office Home & Business perpétuo 2016 em DVD';";

                                 $result4 = $link->query($sql_tabela_4);


                                if ($result4->num_rows > 0) {
                                    // output data of each row
                                    while ($row4 = $result4->fetch_assoc()) {
                                        $quantidade_office4 = $row4['count(nome_licenciamento)'];         
                                              $quantidade_office4 = $row4['count(nome_licenciamento)'];        
                                        
                                        $porcentagem = $quantidade_office - $quantidade_office4;
                                       
                                        echo '      <tr>
                                        <td class="name fw-bold">Home & Business perpétuo 2016 em DVD</td>
                                        <td class="price text-center">'.$quantidade_office4.'</td>
                                        <td class="sales" >
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="progress d-flex flex-grow-1">
                                                    <div class="progress-bar" role="progressbar" style="width: '.$quantidade_office4.'%"  aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ms-3 text-muted">'.$quantidade_office4.'%</span>
                                            </div>
                                        </td>
                                    </tr>';
                                    }
                                    
                                } else {
                                    echo "0 results";
                                }
                                   

                                ?>
                        
                            </tbody>
                        </table>
                    </div> <!-- / .table-responsive -->
                </div>
            </div>
       
               <div class="col-6  d-flex ">

                        <!-- Card -->
                <div class="card border-0 flex-fill w-100" data-list="{&quot;valueNames&quot;: [&quot;name&quot;, &quot;price&quot;, &quot;quantity&quot;, &quot;amount&quot;, {&quot;name&quot;: &quot;sales&quot;, &quot;attr&quot;: &quot;data-sales&quot;}], &quot;page&quot;: 5}" id="topSellingProducts">
                    <div class="card-header border-0 card-header-space-between">

                        <!-- Title -->
                        <h2 class="card-header-title h4 text-uppercase">
                            Setores com mais Máquinas
                        </h2>                  
                  
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table align-middle table-edge table-nowrap mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>
                                        <a href="javascript: void(0);" class="text-muted list-sort" >
                                            Nome Setor
                                        </a>
                                    </th>
                                    <th class="text-center">
                                        <a href="javascript: void(0);" class="text-muted list-sort" >
                                            Quant de Máquinas
                                        </a>
                                    </th>
                                
                                    <th class="text-center pe-7 min-w-200px">
                                        <a href="javascript: void(0);" class="text-muted list-sort" >
                                            Porcentagem
                                        </a>
                                    </th>
                                </tr>
                            
                            </thead>
                            <tbody class="list">
                                <?php 
                                $sql_tabela = "SELECT setor, COUNT(*) AS quantidade_maquinas FROM maquina GROUP BY setor ORDER BY quantidade_maquinas DESC LIMIT 4;";
                                $result = $link->query($sql_tabela);


                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $setor = $row['setor'];   
                                        $quantidade_maquina = $row['quantidade_maquinas'];                                    
                                        echo '      <tr>
                                        <td class="name fw-bold">'.$setor.'</td>
                                        <td class="price text-center">'.$quantidade_maquina.'</td>
                                        <td class="sales" >
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="progress d-flex flex-grow-1">
                                                    <div class="progress-bar" role="progressbar" style="width: '.$quantidade_maquina.'%"  aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ms-3 text-muted">'.$quantidade_maquina.'%</span>
                                            </div>
                                        </td>
                                    </tr>';
                                        
                                    }
                                } else {
                                    echo "0 results";
                                }


                               
                             

                                ?>
                        
                            </tbody>
                        </table>
                    </div> <!-- / .table-responsive -->
                </div>
            </div>

       
    </div>

    
</div>