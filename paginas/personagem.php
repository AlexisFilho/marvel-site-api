<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" href="css/slider.css">

<?php
    $id = $param[1] ?? null;

    if ( empty($id) ) {
        include "erro.php";
    } else {
        echo $arquivo = "https://gateway.marvel.com:443/v1/public/characters/{$id}".URL;
        
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        if (!$dados) {
            return include "erro.php";
        }

        $results = $dados->data->results[0];
        $poster = $results->thumbnail;
        $image = "{$poster->path}/standard_fantastic.{$poster->extension}";

        $description = getDescriptionFromCharacter($results->id);
        
        // echo $results;
        ?>

        <div class="card">
            <div class="row">
                <div class="col-12 col-md-3">
                    <img src="<?=$image?>" alt="<?=$results->name?>" class="w-100">
                </div>
                <div class="col-12 col-md-9 text-justify">
                    <h1 class="text-center"><?=$results->name?></h1>
                    <p><?=$description?></p>
                </div>
            </div>
        </div>
        
        <font color="white">
            <h2>Quadrinhos que participou:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/characters/{$id}/comics".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;
            ?>
            <ul class="sliderG">
                <?php
                    foreach($dados->data->results as $quadrinho) {
                        $poster = $quadrinho->thumbnail;
                        $image = "{$poster->path}/portrait_uncanny.{$poster->extension}";
                ?>
                    <li>
                        <div class="card text-center y">
                            <img src="<?=$image?>" alt="">
                            <p>
                                <strong><?=$quadrinho->title?></strong>
                            </p>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <font color="white">
            <h2 color="white">Séries que participou:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/characters/{$id}/series".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;

                foreach($dados->data->results as $serie) {
                    $poster = $serie->thumbnail;
                    $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
            ?>
            <div class="col-12 col-md-3">
                <div class="card text-center">
                    <img src="<?=$image?>" alt="">
                    <p>
                        <strong><?=$serie->title?></strong>
                    </p>
                    <p>
                        <a href="serie/<?=$serie->id?>" class="btn btn-warning">
                            Ver série
                        </a>
                    </p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

        <font color="white">
            <h2 color="white">Sagas que participou:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/characters/{$id}/events".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;

                foreach($dados->data->results as $saga) {
                    $poster = $saga->thumbnail;
                    $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
            ?>
            <div class="col-12 col-md-3">
                <div class="card text-center">
                    <img src="<?=$image?>" alt="">
                    <p>
                        <strong><?=$saga->title?></strong>
                    </p>
                    <p>
                        <a href="saga/<?=$saga->id?>" class="btn btn-warning">
                            Ver saga
                        </a>
                    </p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

        <?php
    }
?>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type = "text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/cusSlick.js"></script>