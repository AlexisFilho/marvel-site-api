<link rel="stylesheet" href="css/style.css">

<div class="bHbox">
    <img src="imagens/fundoPersonagens.jpg" class="backHead">
</div>

<div class="pageHead">
    <font color="white">
        <h1 class="text-center pageTitle">Series</h1>
    </font>
</div>

<div class="row">
    
    <?php
        $arquivo = "https://gateway.marvel.com:443/v1/public/series".URL;
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        foreach($dados->data->results as $serie) {
            $poster = $serie->thumbnail;
            $image = "{$poster->path}/portrait_uncanny.{$poster->extension}"
            ?>

            <div class="col-12 col-md-3">
                <div class="card text-center y z">
                    <a href="serie/<?=$serie->id?>">
                        <div class="dcard">
                            <img src="<?=$image?>" alt="<?=$serie->title?>" class="cardimg">
                        </div>
                        <p>
                            <strong>
                                <?=$serie->title?>
                            </strong>
                        </p>
                    </a>
                </div>
            </div>

            <?php
        }
    ?>
</div>