<link rel="stylesheet" href="css/style.css">

<div class="bHbox">
    <img src="imagens/fundoSagas.jpg" class="backHead">
</div>

<div class="pageHead">
    <font color="white">
        <h1 class="text-center pageTitle">Sagas</h1>
    </font>
</div>

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
                <div class="sBorder">
                    <div class="card text-center y">
                        <a href="saga/<?=$events->id?>">
                            <div class="dcard">
                                <img src="<?=$image?>" alt="<?=$events->title?>" class="cardimg">
                            </div>
                            <p>
                                <strong>
                                    <?=$events->title?>
                                </strong>
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <?php
        }
    ?>
</div>