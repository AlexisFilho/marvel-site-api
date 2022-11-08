<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/style.css">

<?php
    $id = $param[1] ?? null;

    if ( empty($id) ) {
        include "erro.php";
    } else {
        echo $arquivo = "https://gateway.marvel.com:443/v1/public/comics/{$id}".URL;
        
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        if (!$dados) {
            return include "erro.php";
        }

        $results = $dados->data->results[0];
        $poster = $results->thumbnail;
        $image = "{$poster->path}/portrait_uncanny.{$poster->extension}";

        // $description = getDescriptionFromCharacter($results->id);
        
        // echo $results;
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

        <font color="black">
            <h2>Personagens:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/comics/{$id}/characters".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);
            
                // echo $dados;
            ?>
            <ul class="sliderN">
                <?php
                    foreach($dados->data->results as $personagem) {
                        $poster = $personagem->thumbnail;
                        $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
                ?>
                    <li>
                        <div class="card text-center y">
                            <a href="personagem/<?=$personagem->id?>">
                                <div class="dcard">
                                    <img src="<?=$image?>" class="cardimg">
                                </div>
                                <p>
                                    <strong><?=$personagem->name?></strong>
                                </p>
                            </a>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <font color="black">
            <h2>Criadores:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/comics/{$id}/creators".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;
            ?>
            <ul class="sliderG">
                <?php
                    foreach($dados->data->results as $criador) {
                        $poster = $criador->thumbnail;
                        $image = "{$poster->path}/portrait_uncanny.{$poster->extension}";
                ?>
                    <li>
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
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>

        <font color="black">
            <h2>Sagas:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/comics/{$id}/events".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;
            ?>
            <ul class="sliderG">
                <?php
                    foreach($dados->data->results as $saga) {
                        $poster = $saga->thumbnail;
                        $image = "{$poster->path}/portrait_uncanny.{$poster->extension}";
                ?>
                    <li>
                        <div class="card text-center y">
                            <a href="saga/<?=$saga->id?>">
                                <div class="dcard">
                                    <img src="<?=$image?>" class="cardimg">
                                </div>
                                <p>
                                    <strong><?=$saga->title?></strong>
                                </p>
                            </a>
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