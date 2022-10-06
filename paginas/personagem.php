<?php
    $id = $param[1] ?? null;

    if ( empty($id) ) {
        include "erro.php";
    } else {
        echo $arquivo = "https://gateway.marvel.com:443/v1/public/characters/{$id}".URL;
        
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        $results = $dados->data->results[0];
        $poster = $results->thumbnail;
        $image = "{$poster->path}.{$poster->extension}";

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

        <h2>Quadrinhos que participou:</h2>

        <div class="row">
            <?php
                echo $arquivo = "http://gateway.marvel.com/v1/public/characters/{$id}/comics".URL;

                $dados = file_get_contents($arquivo);
                $dados = json_decode($dados);

                // echo $dados;

                foreach($dados->data->results as $quadrinho) {
                    $poster = $quadrinho->thumbnail;
                    $image = "{$poster->path}.{$poster->extension}";
                    ?>

                    <div class="col-12 col-md-3">
                        <div class="card text-center">
                            <img src="<?=$image?>" alt="">
                            <p>
                                <strong><?=$quadrinho->title?></strong>
                            </p>
                            <p>
                                <a href="quadrinho/<?=$quadrinho->id?>" class="btn btn-warning">
                                    Ver quadrinho
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