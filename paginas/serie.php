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
        $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
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

                foreach($dados->data->results as $creator) {
                    $poster = $creator->thumbnail;
                    $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
            ?>

                    <div class="col-12 col-md-3">
                        <div class="card text-center">
                            <img src="<?=$image?>" alt="<?=$creator->name?>">
                            <p>
                                <strong><?=$creator->fullName?></strong>
                            </p>
                            <p>
                                <a href="criador/<?=$creator->id?>" class="btn btn-warning">
                                    Ver personagem
                                </a>
                            </p>
                        </div>
                    </div>

            <?php
                }
            ?>
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

                foreach($dados->data->results as $character) {
                    $poster = $character->thumbnail;
                    $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
            ?>

                    <div class="col-12 col-md-3">
                        <div class="card text-center">
                            <img src="<?=$image?>" alt="<?=$character->name?>">
                            <p>
                                <strong><?=$character->name?></strong>
                            </p>
                            <p>
                                <a href="personagem/<?=$character->id?>" class="btn btn-warning">
                                    Ver personagem
                                </a>
                            </p>
                        </div>
                    </div>

            <?php
                }
            ?>
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

                foreach($dados->data->results as $comic) {
                    $poster = $comic->thumbnail;
                    $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
            ?>
            <div class="col-12 col-md-3">
                <div class="card text-center">
                    <img src="<?=$image?>" alt="<?=$comic->name?>">
                    <p>
                        <strong><?=$comic->name?></strong>
                    </p>
                    <p>
                        <a href="quadrinho/<?=$comic->id?>" class="btn btn-warning">
                            Ver personagem
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