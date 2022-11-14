<link rel="stylesheet" href="css/style.css">

<div class="bHbox">
    <img src="imagens/criadores.jpg" class="backHead">
</div>

<div class="pageHead">
    <font color="white">
        <h1 class="text-center pageTitle">Criadores</h1>
    </font>
</div>
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
                <div class="sBorder z">
                    <div class="card text-center y">
                        <a href="criador/<?=$creator->id?>">
                            <div class="dcard">
                                <img src="<?=$image?>" alt="<?=$creator->title?>" class="cardimg">
                            </div>
                            <p>
                                <strong>
                                    <?=$creator->fullName?>
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