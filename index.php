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
    <base href="http://localhost/marvel-site-api/">

    <link rel="shortcut icon" href="imagens/shield.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">

    <script src="https://kit.fontawesome.com/4af1129b29.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row">
        <div class="col-12 col-md-2 backwhite">
            <!-- <nav class="navbar navbar-expand-lg bg-light text-center">
                <div class="container-fluid">
                    <button class="navbar-toggler" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" 
                        aria-expanded="false" 
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <div class="container">
                        <div class="nav flex-column" id="navbarSupportedContent">
                            <a href="index.php">
                                <img src="imagens/logo.png" alt="marvel" class="logo">
                            </a>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="personagens">PERSONAGENS</a>
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
                <!-- </div>
            </nav> -->
        </div>
        <div class="col-12 col-md-10">
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
        </div>
    </div>
    <script 
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" 
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" 
        crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>