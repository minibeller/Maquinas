<!DOCTYPE html>
<html>

<head>
    <title>Controle de Máquinas Mantiqueira - CMM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body class='container-fluid dark' style="background-color:#cfcfcf; text-align: center;" >
<div class="row" >
    <div class="col-12" style="height: 150px;"></div>
</div>
    <div class="row ">
        <div class='col-4' >
            
        
        </div>
        <div class='col-4 bg-light rounded' >
            <form class='mt-3 mb-3' action="verifica_login.php" method="post"> 
            <img src="img/logo.png"  style="max-width:200px; max-height:150px" alt="...">
                <h1>Máquinas Mantiqueira</h1>                
                <div class="text-start">
                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" >
                </div>
                <div class="text-start">
                    <label for="exampleFormControlInput1" class="form-label">Senha: </label>
                    <input type="password" class="form-control" name="senha" >
                </div>
                <button type="submit" class="btn mt-4 w-100 btn-success">Login</button>
            </form>
        </div>
        <div class="col-4"></div>
   
    </div>