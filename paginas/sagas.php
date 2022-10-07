<div class="row">
    <?php
        $arquivo = "https://gateway.marvel.com:443/v1/public/events".URL;
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        foreach($dados->data->results as $stories) {
            $poster = $stories->thumbnail;
            $image = "{$poster->path}.{$poster->extension}"
            ?>

            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="<?=$image?>" alt="<?=$stories->title?>">
                    <div class="card-body text-center">
                        <p class="titulo">
                            <strong>
                                <?=$stories->title?>;
                            </strong>
                        </p>
                        <p>
                            <a href="saga/<?=$stories->id?>" class="btn btn-warning">
                                Detalhes
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <?php
        }
    ?>
</div>