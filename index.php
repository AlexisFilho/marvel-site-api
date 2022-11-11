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

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/nav-bar-on-side.css">
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/4af1129b29.js" crossorigin="anonymous"></script>
    <script src="js/nav-bar-on-side.js"></script>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> 
            <i class='bx bx-menu' id="header-toggle"></i> 
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="home" class="nav_logo"> 
                    <img src="imagens/logoM.png" alt="" class="icon">
                    <span class="nav_logo-name">Marvel-site</span> 
                </a>
                <div class="nav_list"> 
                    <a href="home" class="nav_link active"> 
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Home</span> 
                    </a> 
                    <a href="personagens" class="nav_link"> 
                        <img src="imagens/ironManAmerica.png" alt="" class="icon">
                        <span class="nav_name">Personagens</span> 
                    </a> 
                    <a href="quadrinhos" class="nav_link"> 
                        <img src="imagens/comics.png" alt="" class="icon">
                        <span class="nav_name">Quadrinhos</span> 
                    </a> 
                    <a href="sagas" class="nav_link"> 
                        <img src="imagens/sagas.png" alt="" class="icon"> 
                        <span class="nav_name">Sagas</span> 
                    </a> 
                    <a href="series" class="nav_link"> 
                        <img src="imagens/homemDeFerro.png" alt="" class="icon">
                        <span class="nav_name">Séries</span> 
                    </a> 
                    <a href="criadores" class="nav_link"> 
                        <img src="imagens/criador.png" alt="" class="icon"> 
                        <span class="nav_name">Criadores</span> 
                    </a> 
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-12 col-md-2 backwhite">

            <!-- <div class="container">
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
            </div> -->

        </div>
        <div>
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</body>
</html>