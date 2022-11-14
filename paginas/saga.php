<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/style.css">

<?php
    $id = $param[1] ?? null;

    if ( empty($id) ) {
        include "erro.php";
    } else {
        $arquivo = "https://gateway.marvel.com:443/v1/public/events/{$id}".URL;

        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        $results = $dados->data->results[0];
        $poster = $results->thumbnail;
        $image = "{$poster->path}/portrait_uncanny.{$poster->extension}";
        ?>

        <div class="card s">
            <div class="row">
                <div class="col-12 col-md-3">
                    <img src="<?=$image?>" alt="<?=$results->title?>">
                </div>
                <div class="col-12 col-md-9 text-center">
                    <h1 class="text-center cTitle"><?=$results->title?></h1>
                    <p class="cCont"><?=$results->description?></p>
                </div>
            </div>
        </div>

        <br>
        <br>

        <font color="white">
            <h2>Personagens que participaram:</h2>
        </font>

        <div class="row">
            <?php
                $arquivo = "http://gateway.marvel.com/v1/public/events/{$id}/characters".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);
            ?>
            <ul class="sliderN">
                <?php
                    foreach($dados->data->results as $quadrinho) {
                        $poster = $quadrinho->thumbnail;
                        $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
                ?>
                    <li>
                        <div class="sBorder z">
                            <div class="card text-center y">
                                <a href="personagem/<?=$quadrinho->id?>">
                                    <div class="dcard">
                                        <img src="<?=$image?>" class="cardimg">
                                    </div>
                                    <p>
                                        <strong><?=$quadrinho->name?></strong>
                                    </p>
                                </a>
                            </div>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <br>
        <br>
        
        <font color="white">
            <h2>Criadores:</h2>
        </font>

        <div class="row">
            <?php
                $arquivo = "http://gateway.marvel.com/v1/public/events/{$id}/creators".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);
            ?>
            <ul class="sliderG">
                <?php
                    foreach($dados->data->results as $criador) {
                        $poster = $criador->thumbnail;
                        $image = "{$poster->path}/portrait_uncanny.{$poster->extension}";
                ?>
                <li>
                    <div class="sBorder z">
                        <div class="card text-center y">
                            <a href="criador/<?=$criador->id?>">
                                <div class="dcard">
                                    <img src="<?=$image?>" class="cardimg">
                                </div>
                                <p>
                                    <strong><?=$criador->fullName?></strong>
                                </p>
                            </a>
                        </div>
                    </div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <br>
        <br>
        
        <font color="white">
            <h2>Quadrinhos:</h2>
        </font>

        <div class="row">
            <?php
                $arquivo = "http://gateway.marvel.com/v1/public/events/{$id}/comics".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);
            ?>

            <ul class="sliderG">
                <?php
                    foreach($dados->data->results as $quadrinho) {
                    $poster = $quadrinho->thumbnail;
                    $image = "{$poster->path}/portrait_uncanny.{$poster->extension}";
                ?>
                <li>
                    <div class="sBorder z">
                        <div class="card text-center y">
                            <a href="quadrinho/<?=$quadrinho->id?>">
                                <div class="dcard">
                                    <img src="<?=$image?>" class="cardimg">
                                </div>
                                <p>
                                    <strong><?=$quadrinho->title?></strong>
                                </p>
                            </a>
                        </div>
                    </div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <br>
        <br>
        
        <font color="white">
            <h2>Séries:</h2>
        </font>

        <div class="row">
            <?php
                $arquivo = "http://gateway.marvel.com/v1/public/events/{$id}/series".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);
            ?>
            <ul class=sliderG>
                <?php
                    foreach($dados->data->results as $serie) {
                    $poster = $serie->thumbnail;
                    $image = "{$poster->path}/portrait_uncanny.{$poster->extension}";
                ?>
                <li>
                    <div class="sBorder z">
                        <div class="card text-center y">
                            <a href="serie/<?=$serie->id?>">
                                <div class="dcard">
                                    <img src="<?=$image?>" class="cardimg">
                                </div>
                                <p>
                                    <strong><?=$serie->title?></strong>
                                </p>
                            </a>
                        </div>
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