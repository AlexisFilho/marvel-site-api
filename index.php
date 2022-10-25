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
    <link rel="stylesheet" href="css/nav-bar-on-side.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> -->

    <script src="https://kit.fontawesome.com/4af1129b29.js" crossorigin="anonymous"></script>
    <script src="js/nav-bar-on-side.js"></script>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script> -->
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> 
            <i class='bx bx-menu' id="header-toggle"></i> 
        </div>
        <div class="header_img"> 
            <img src="https://i.imgur.com/hczKIze.jpg" alt=""> 
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> 
                    <i class='bx bx-layer nav_logo-icon'></i> 
                    <span class="nav_logo-name">BBBootstrap</span> 
                </a>
                <div class="nav_list"> 
                    <a href="#" class="nav_link active"> 
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Dashboard</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Users</span> 
                    </a> <a href="#" class="nav_link"> 
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name">Messages</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-bookmark nav_icon'></i> 
                        <span class="nav_name">Bookmark</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-folder nav_icon'></i> 
                        <span class="nav_name">Files</span> 
                    </a> 
                    <a href="#" class="nav_link"> 
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                        <span class="nav_name">Stats</span> 
                    </a> 
                </div>
            </div> 
            <a href="#" class="nav_link"> 
                <i class='bx bx-log-out nav_icon'></i> 
                <span class="nav_name">SignOut</span> 
            </a>
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