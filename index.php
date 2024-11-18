<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Cadastro</title>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* estilo da tela inicial (home)*/
        body {
            background-color: #1a1a1a;
            color: white;
        }

        .navbar-brand {
            font-size: 1.75rem;
        }

        .navbar-nav .nav-link {
            font-size: 1rem;
        }

        .carousel-inner img {
            max-height: 400px;
            object-fit: cover;
        }

        .carousel-item {
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
        }

        .carousel-item.active {
            opacity: 1;
        }

        .carousel {
            margin-top: 20px;
        }

        .carousel-title {
            margin: 20px 0;
            font-size: 2rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <img src="icon1.png" width="50" height="50" alt="">
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
                    <a class="nav-link text-white" href="listar-filmes.php">Filmes</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="text-center carousel-title">
        FILMES EM CARTAZ
    </div>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="738b578e1f4bf194369833c8caeb5ece.jpg" class="d-block w-100" alt="A Substância">
                <div class="carousel-caption d-none d-md-block">
                    <h5>A SUBSTÂNCIA</h5>
                    <p>Elisabeth Sparkle, renomada por um programa de aeróbica, enfrenta um golpe devastador quando seu chefe a demite. Em meio ao seu desespero, um laboratório lhe oferece uma substância que promete transformá-la em uma versão aprimorada.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="terrifier 3.jpg" class="d-block w-100" alt="Terrifier 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>TERRIFIER 3</h5>
                    <p>Após sobreviver ao massacre de Halloween do Palhaço Art, Sienna e seu irmão lutam para reconstruir suas vidas despedaçadas. No entanto, justo quando pensam que estão seguros, Art retorna, determinado a transformar sua alegria natalina em um pesadelo.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="sorria2.png" class="d-block w-100" alt="Sorria 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>SORRIA 2</h5>
                    <p>Skye Riley começa a experimentar eventos cada vez mais aterrorizantes e inexplicáveis. Sobrecarregada pelos horrores crescentes e pelas pressões da fama, ela deve enfrentar seu passado sombrio para recuperar o controle de sua vida.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
    
</body>

</html>
