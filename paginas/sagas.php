<link rel="stylesheet" href="css/style.css">

<font color="white">
    <h1>Sagas:</h1>
</font>

<div class="row">
    <?php
        $arquivo = "https://gateway.marvel.com:443/v1/public/events".URL;
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        foreach($dados->data->results as $events) {
            $poster = $events->thumbnail;
            $image = "{$poster->path}/portrait_uncanny.{$poster->extension}"
            ?>

            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="<?=$image?>" alt="<?=$events->title?>">
                    <div class="card-body text-center">
                        <p class="titulo">
                            <strong>
                                <?=$events->title?>
                            </strong>
                        </p>
                        <p>
                            <a href="saga/<?=$events->id?>" class="btn btn-warning">
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