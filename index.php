<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 05-09-2022</title>
    <base href="http://localhost/tarefa-05-09-2022/">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        footer {
            width: 100%;
            height: 100px;
            position: absolute;
            bottom: 0;
            left: 0;
        }
    </style>
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
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">TRABALHO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="json">JSON</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="xml">XML</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="api">API</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="webservice">WEBSERVICE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <?php
            $pagina = "trabalho";

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

    <footer class="bg-light" style:{postion: absolute}>
            <p class="text-center">
                Desenvolvido por 
                <br>Mateus da Silva
            </p>
    </footer>
    
    <script 
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" 
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" 
        crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>