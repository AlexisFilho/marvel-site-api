<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" href="css/slider.css">

<?php
    $id = $param[1] ?? null;

    if ( empty($id) ) {
        include "erro.php";
    } else {
        echo $arquivo = "https://gateway.marvel.com:443/v1/public/series/{$id}".URL;
                
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);
        
        if (!$dados) {
            return include "erro.php";
        }
        
        $results = $dados->data->results[0];
        $poster = $results->thumbnail;
        $image = "{$poster->path}/portrait_uncanny.{$poster->extension}";
        ?>

        <div class="card">
            <div class="row">
                <div class="col-12 col-md-3">
                    <img src="<?=$image?>" alt="<?=$results->title?>" class="w-100">
                </div>
                <div class="col-12 col-md-9 text-justify">
                    <h1 class="text-center"><?=$results->title?></h1>
                    <p><?=$results->description?></p>
                </div>
            </div>
        </div>

        <font color="white">
            <h2>Criadores:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/series/{$id}/creators".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;
            ?>
            <ul class="sliderG">
                <?php
                    foreach($dados->data->results as $creator) {
                        $poster = $creator->thumbnail;
                        $image = "{$poster->path}/portrait_uncanny.{$poster->extension}";
                ?>
                    <li>
                        <div class="text-center y">
                            <img src="<?=$image?>" alt="<?=$creator->name?>">
                            <p>
                                <strong><?=$creator->fullName?></strong>
                            </p>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <font color="white">
            <h2>Personagens:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/series/{$id}/characters".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;
            ?>
            <ul class="sliderN">
                <?php
                    foreach($dados->data->results as $character) {
                        $poster = $character->thumbnail;
                        $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
                ?>
                    <li>
                        <div class="text-center y">
                            <img src="<?=$image?>" alt="<?=$character->name?>">
                            <p>
                                <strong><?=$character->name?></strong>
                            </p>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <font color="white">
            <h2>Quadrinhos:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/series/{$id}/comics".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;
            ?>
            <ul class="sliderG">
                <?php
                    foreach($dados->data->results as $comic) {
                        $poster = $comic->thumbnail;
                        $image = "{$poster->path}/portrait_uncanny.{$poster->extension}";
                ?>
                    <li>
                        <div class="text-center y">
                            <img src="<?=$image?>" alt="<?=$comic->name?>">
                            <p>
                                <strong><?=$comic->title?></strong>
                            </p>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <?php
    }
?>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type = "text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/cusSlick.js"></script>