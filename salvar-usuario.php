<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salvar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #1a1a1a;
            color: white; 
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
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

    <<div class="container mt-5">
    <?php
    include("config.php");

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            // Criptografando a senha com password_hash
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc)
                    VALUES ('{$nome}', '{$email}', '{$senha_hash}', '{$data_nasc}')";

            $res = $conn->query($sql);

            if ($res) {
                echo "<div class='alert alert-success'>Cadastrado com sucesso!</div>";
            } else {
                echo "<div class='alert alert-danger'>Não foi possível cadastrar: " . $conn->error . "</div>";
            }
            break;

        default:
            echo "<div class='alert alert-warning'>Ação inválida.</div>";
            break;
    }
    ?>      
    <a href="index.php" class="btn btn-outline-secondary">Home</a>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
