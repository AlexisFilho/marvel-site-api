<link rel="stylesheet" href="css/style.css">

<div class="row">
    <?php
        $arquivo = "https://gateway.marvel.com:443/v1/public/characters".URL;
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        foreach($dados->data->results as $character) {
            $poster = $character->thumbnail;
            $image = "{$poster->path}/standard_fantastic.{$poster->extension}"
            ?>

            <div class="col-12 col-md-3">
                <div class="card text-center y">
                    <a href="personagem/<?=$character->id?>">
                        <div class="dcard">
                            <img src="<?=$image?>" alt="<?=$character->title?>" class="cardimg">
                        </div>
                        <p class="titulo">
                            <strong>
                                <?=$character->name?>
                            </strong>
                        </p>
                    </a>
                </div>
            </div>

            <?php
        }
    ?>
</div>