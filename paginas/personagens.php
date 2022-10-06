<div class="row">
    <?php
        $arquivo = "https://gateway.marvel.com:443/v1/public/characters".URL;
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        foreach($dados->data->results as $character) {
            $poster = $character->thumbnail;
            $image = "{$poster->path}.{$poster->extension}"
            ?>

            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="<?=$image?>" alt="<?=$character->title?>">
                    <div class="card-body text-center">
                        <p class="titulo">
                            <strong>
                                <?=$character->name?>;
                            </strong>
                        </p>
                        <p>
                            <a href="personagem/<?=$character->id?>" class="btn btn-warning">
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