<a href="personagens">
    <font color="black">
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
                        <div class="card card-slide text-center">
                            <a href="personagem/<?=$personagem->id?>" class="btn">
                                <img src="<?=$image?>" alt="">
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

<a href="series">
    <font color="black">
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
                        <div class="card card-slide text-center">
                            <a href="serie/<?=$serie->id?>" class="btn">
                                <img src="<?=$image?>" alt="">
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

<a href="quadrinhos">
    <font color="black">
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
                        <div class="card card-slide text-center">
                            <a href="quadrinho/<?=$quadrinho->id?>" class="btn">
                                <img src="<?=$image?>" alt="">
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

<a href="sagas">
    <font color="black">
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
                        <div class="card card-slide text-center">
                            <a href="saga/<?=$saga->id?>" class="btn">
                                <img src="<?=$image?>" alt="">
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

<a href="criadores">
    <font color="black">
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
                        <div class="card card-slide text-center">
                            <a href="criador/<?=$criador->id?>" class="btn">
                                <img src="<?=$image?>" alt="">
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