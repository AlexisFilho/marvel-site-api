<?php
    $arquivo = "https://gateway.marvel.com:443/v1/public/series".URLL;
    $dados = file_get_contents($arquivo);
    $dados = json_decode($dados);

    foreach($dados->data->results as $serie) {
        $poster = $serie->thumbnail->path;
        ?>

        <div class="col-12 col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <p class="titulo">
                        <strong>
                            <?=$serie->title?>;
                        </strong>
                    </p>
                </div>
                <img src="<?=$poster?>" alt="">
            </div>
        </div>

        <?php
    }
?>