<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Máquinas Mantiqueira - CMM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body {
            background-color: #f3f4f6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            border: none;
            border-top: 5px solid #3e4095; /* Borda verde sólida no topo combinando com o botão */
            transition: transform 0.2s ease;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                
                <div class="card login-card shadow-lg rounded-4 p-4 bg-white">
                    <div class="text-center mb-4">
                        <img src="img/logo.png" class="img-fluid mb-3" style="max-height: 110px; object-fit: contain;" alt="Logo Mantiqueira">
                        <h2 class="fw-bold text-dark h4 mb-1">Máquinas Mantiqueira</h2>
                        <span class="text-muted small">Controle de Ativos e Licenciamento</span>
                    </div>

                    <form action="verifica_login.php" method="post"> 
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label text-muted fw-semibold small mb-1">
                                <i class="bi bi-envelope me-1"></i> E-mail:
                            </label>
                            <input type="email" class="form-control form-control-lg fs-6" id="email" name="email" placeholder="nome@empresa.com" required>
                        </div>

                        <div class="mb-4 text-start">
                            <label for="senha" class="form-label text-muted fw-semibold small mb-1">
                                <i class="bi bi-lock me-1"></i> Senha:
                            </label>
                            <input type="password" class="form-control form-control-lg fs-6" id="senha" name="senha" placeholder="••••••••" required>
                        </div>

                        <button type="submit" style="background-color:  #3e4095;" class="btn text-white btn-lg w-100 fw-bold shadow-sm py-2.5 rounded-3">
                            Entrar no Sistema <i class="bi bi-box-arrow-in-right ms-1"></i>
                        </button>
                    </form>
                </div>
                
                <div class="text-center mt-4">
                    <p class="text-muted small mb-0">&copy; 2026 Mantiqueira TI. Todos os direitos reservados.</p>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>