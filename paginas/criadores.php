<link rel="stylesheet" href="css/style.css">

<div class="row">
    <?php
        $arquivo = "https://gateway.marvel.com:443/v1/public/creators".URL;
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        foreach($dados->data->results as $creator) {
            $poster = $creator->thumbnail;
            $image = "{$poster->path}/standard_fantastic.{$poster->extension}"
            ?>

            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="<?=$image?>" alt="<?=$creator->title?>">
                    <div class="card-body text-center">
                        <p class="titulo">
                            <strong>
                                <?=$creator->fullName?>
                            </strong>
                        </p>
                        <p>
                            <a href="criador/<?=$creator->id?>" class="btn btn-warning">
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