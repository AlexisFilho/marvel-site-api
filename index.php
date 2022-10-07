<?php
    include "configs.php";
    include "funcoes/personagens/getDescriptionFromCharacter.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Site Api</title>
    <link rel="shortcut icon" href="imagens/shield.png">
    <base href="http://localhost/marvel-site-api/">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="text-center">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="personagens">PERSONAGENS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="filmes">FILMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="series">SÉRIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quadrinhos">QUADRINHOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sagas">SAGAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="criadores">CRIADORES</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="index.php">
                <img src="imagens/logo.png" alt="marvel" class="logo">
            </a>
        </div>
    </nav>
    
    <main class="container">
        <?php
            $pagina = "home";

            if ( isset( $_GET["param"] ) ) {
                $param = trim( $_GET["param"] );
                $param = explode("/", $param);
                $pagina = $param[0];
            }

            $pagina = "paginas/{$pagina}.php";

            if ( file_exists( $pagina ) ) {
                include $pagina;
            } else {
                include "paginas/erro.php";
            }
        ?>
    </main>
    
    <script 
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" 
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" 
        crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>