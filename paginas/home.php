<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">

<a href="personagens">
    <font color="white">
        <h2>Personagens:</h2>
    </font>
</a>

<div class="row">
    <?php
        $arquivo = "http://gateway.marvel.com/v1/public/characters".URL;

        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);
    ?>

    <div class="slider">
        <div class="slide-track">
            <?php
                foreach($dados->data->results as $personagem) {
                    $poster = $personagem->thumbnail;
                    $image = "{$poster->path}/portrait_incredible.{$poster->extension}";
            ?>
                    <div class="slide">
                        <div class="card card-slide text-center y">
                            <a href="personagem/<?=$personagem->id?>">
                                <div class="dcard">
                                    <img src="<?=$image?>" class="cardimg">
                                </div>
                                <p>
                                    <strong><?=$personagem->name?></strong>
                                </p>
                            </a>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>

<br>
<br>

<a href="series">
    <font color="white">
        <h2>Séries:</h2>
    </font>
</a>

<div class="row">
    <?php
        $arquivo = "http://gateway.marvel.com/v1/public/series".URL;

        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);
    ?>

    <div class="slider">
        <div class="slide-track">
            <?php
                foreach($dados->data->results as $serie) {
                    $poster = $serie->thumbnail;
                    $image = "{$poster->path}/portrait_incredible.{$poster->extension}";
            ?>
                    <div class="slide">
                        <div class="card card-slide text-center y">
                            <a href="serie/<?=$serie->id?>">
                                <div class="dcard">
                                    <img src="<?=$image?>" class="cardimg">
                                </div>
                                <p>
                                    <strong><?=$serie->title?></strong>
                                </p>
                            </a>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>

<br>
<br>

<a href="quadrinhos">
    <font color="white">
        <h2>Quadrinhos:</h2>
    </font>
</a>

<div class="row">
    <?php
        $arquivo = "http://gateway.marvel.com/v1/public/comics".URL;

        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);
    ?>

    <div class="slider">
        <div class="slide-track">
            <?php
                foreach($dados->data->results as $quadrinho) {
                    $poster = $quadrinho->thumbnail;
                    $image = "{$poster->path}/portrait_incredible.{$poster->extension}";
            ?>
                    <div class="slide">
                        <div class="card card-slide text-center y">
                            <a href="quadrinho/<?=$quadrinho->id?>">
                                <div class="dcard">
                                    <img src="<?=$image?>" alt="">
                                </div>
                                <p>
                                    <strong><?=$quadrinho->title?></strong>
                                </p>
                            </a>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>

<br>
<br>

<a href="sagas">
    <font color="white">
        <h2>Sagas:</h2>
    </font>
</a>

<div class="row">
    <?php
        $arquivo = "http://gateway.marvel.com/v1/public/events".URL;

        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);
    ?>

    <div class="slider">
        <div class="slide-track">
            <?php
                foreach($dados->data->results as $saga) {
                    $poster = $saga->thumbnail;
                    $image = "{$poster->path}/portrait_incredible.{$poster->extension}";
            ?>
                    <div class="slide">
                        <div class="card card-slide text-center y">
                            <a href="saga/<?=$saga->id?>">
                                <div class="dcard">
                                    <img src="<?=$image?>" class="cardimg">
                                </div>
                                <p>
                                    <strong><?=$saga->title?></strong>
                                </p>
                            </a>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>

<br>
<br>

<a href="criadores">
    <font color="white">
        <h2>Criadores:</h2>
    </font>
</a>

<div class="row">
    <?php
        $arquivo = "http://gateway.marvel.com/v1/public/creators".URL;

        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);
    ?>

    <div class="slider">
        <div class="slide-track">

            <?php
                foreach($dados->data->results as $criador) {
                    $poster = $criador->thumbnail;
                    $image = "{$poster->path}/portrait_incredible.{$poster->extension}";
            ?>
                    <div class="slide">
                        <div class="card card-slide text-center y">
                            <a href="criador/<?=$criador->id?>">
                                <div class="dcard">
                                    <img src="<?=$image?>" class="cardimg">
                                </div>
                                <p>
                                    <strong><?=$criador->fullName?></strong>
                                </p>
                            </a>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>