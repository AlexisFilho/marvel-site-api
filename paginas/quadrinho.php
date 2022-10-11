<?php
    $id = $param[1] ?? null;

    if ( empty($id) ) {
        include "erro.php";
    } else {
        echo $arquivo = "https://gateway.marvel.com:443/v1/public/comics/{$id}".URL;
        
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        $results = $dados->data->results[0];
        $poster = $results->thumbnail;
        $image = "{$poster->path}/standard_fantastic.{$poster->extension}";

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

        <font color="white">
            <h2>Personagens:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/comics/{$id}/characters".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;

                foreach($dados->data->results as $personagem) {
                    $poster = $personagem->thumbnail;
                    $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
            ?>
            <div class="col-12 col-md-3">
                <div class="card text-center">
                    <img src="<?=$image?>" alt="">
                    <p>
                        <strong><?=$personagem->title?></strong>
                    </p>
                    <p>
                        <a href="personagem/<?=$personagem->id?>" class="btn btn-warning">
                            Ver mais
                        </a>
                    </p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

        <font color="white">
            <h2>Criadores:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/comics/{$id}/creators".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;

                foreach($dados->data->results as $criador) {
                    $poster = $criador->thumbnail;
                    $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
            ?>
            <div class="col-12 col-md-3">
                <div class="card text-center">
                    <img src="<?=$image?>" alt="">
                    <p>
                        <strong><?=$criador->fullName?></strong>
                    </p>
                    <p>
                        <a href="criador/<?=$criador->id?>" class="btn btn-warning">
                            Ver mais
                        </a>
                    </p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

        <font color="white">
            <h2>Sagas:</h2>
        </font>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/comics/{$id}/events".URL;

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
                        <strong><?=$saga->fullName?></strong>
                    </p>
                    <p>
                        <a href="saga/<?=$saga->id?>" class="btn btn-warning">
                            Ver mais
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