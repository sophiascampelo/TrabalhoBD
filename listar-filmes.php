<?php
include("config.php");

$search = isset($_GET['search']) ? $_GET['search'] : '';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            color: white;
        }
        .navbar-brand {
            font-size: 1.75rem;
            margin-right: 20px;
        }
        .navbar-nav .nav-link {
            font-size: 1rem;
            margin-left: 15px;
            margin-right: 15px;
        }
        .search-bar {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        .card {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <img src="icon1.png" width="50" height="50" class="d-inline-block align-top" alt="">
        <b class="navbar-brand text-white">Letterboxrd</b>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="novo-usuario.php">Novo Usuário</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="listar-filmes.php">Filmes</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Título e barra de busca -->
    <div class="container text-center mt-4">
        <h2>FILMES</h2>
    </div>
    <div class="search-bar">
        <form class="d-flex" action="listar-filmes.php" method="GET">
            <input class="form-control me-2" type="search" name="search" placeholder="Buscar filme" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">
                <!-- icone do bootstrap-->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
            </button>
        </form>
    </div>

    <!-- Lista de Filmes -->
    <div class="container mt-4">
        <div class="row">
            <?php
            // Define a consulta SQL dependendo se há busca ou não
            if ($search) {
                $sql = "SELECT title, genres, rating FROM movies_ratings WHERE title LIKE ?";
                $stmt = $conn->prepare($sql);
                $searchTerm = "%" . $search . "%";
                $stmt->bind_param("s", $searchTerm);
            } else {
                $sql = "SELECT DISTINCT title, genres FROM movies_ratings";
                $stmt = $conn->prepare($sql);
            }

            $stmt->execute();
            $result = $stmt->get_result();

            // Exibe os filmes ou uma mensagem de aviso
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-4 mb-4'>";
                    echo "<div class='card h-100'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . htmlspecialchars($row['title']) . "</h5>";
                    echo "<p class='card-text'><strong>Gêneros:</strong> " . htmlspecialchars($row['genres']) . "</p>";
                    if ($search) {
                        echo "<p class='card-text'><strong>Avaliação:</strong> " . htmlspecialchars($row['rating']) . "</p>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<div class='alert alert-warning text-center'>Nenhum filme encontrado.</div>";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
