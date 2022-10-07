<?php
    $id = $param[1] ?? null;

    if ( empty($id) ) {
        include "erro.php";
    } else {
        echo $arquivo = "https://gateway.marvel.com:443/v1/public/events/{$id}".URL;

        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        $results = $dados->data->results[0];
        $poster = $results->thumbnail;
        $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
        ?>

        <div class="card">
            <div class="row">
                <div class="col-12 col-md-3">
                    <img src="<?=$image?>" alt="<?=$results->title?>">
                </div>
                <div class="col-12 col-md-9 text-justify">
                    <h1 class="text-center">
                        <strong>
                            <?=$results->title?>
                        </strong>    
                    </h1>
                    <p><?=$results->description?></p>
                </div>
            </div>
        </div>

        <h2>Personagens que participaram:</h2>

        <div class="row">
        <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/events/{$id}/characters".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;

                foreach($dados->data->results as $quadrinho) {
                    $poster = $quadrinho->thumbnail;
                    $image = "{$poster->path}/standard_fantastic.{$poster->extension}";
            ?>

                    <div class="col-12 col-md-3">
                        <div class="card text-center">
                            <img src="<?=$image?>" alt="">
                            <p>
                                <strong><?=$quadrinho->name?></strong>
                            </p>
                            <p>
                                <a href="personagem/<?=$quadrinho->id?>" class="btn btn-warning">
                                    Detalhes
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