<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Cadastro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* cor do fundo do site */
        body {
            background-color: #1a1a1a;
            color: white; 
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black"> <!-- navbar preto -->
        <img src="icon1.png" width="50" height="50" class="d-inline-block align-top" alt="">
        <b class="navbar-brand text-white">Letterboxrd</b>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="novo-usuario.php">Novo Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="?page=listar-filmes.php">Filmes</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Letterxborxd - Cadastro</h1>
        <form action="salvar-usuario.php" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            
            <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="mb-3">
               <label>Email</label> 
               <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
               <label>Senha</label> 
               <input type="password" name="senha" class="form-control">
            </div>
            <div class="mb-3">
               <label>Data de Nascimento</label> 
               <input type="date" name="data_nasc" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
