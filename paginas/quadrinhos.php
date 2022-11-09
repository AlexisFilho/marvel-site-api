<link rel="stylesheet" href="css/style.css">
<font color="white">
    <h1>Quadrinhos</h1>
</font>

<div class="row">
    <?php
        $arquivo = "https://gateway.marvel.com/v1/public/comics".URL;
        $dados = file_get_contents($arquivo);
        $dados = json_decode($dados);

        foreach($dados->data->results as $quadrinho){
            $image = $quadrinho->thumbnail->path;
            $extension = $quadrinho->thumbnail->extension;
            $cover = $image."/portrait_uncanny.".$extension;
            ?>
                <div class="col-12 col-md-3">
                    <div class="card text-center y">
                        <a href="quadrinho/<?=$quadrinho->id?>">
                            <div class="dcard">
                                <img src="<?=$cover?>" alt="<?=$quadrinho->title?>" class="cardimg">
                            </div>
                            <p>
                                <strong>
                                    <?=$quadrinho->title?>
                                </strong>
                            </p>
                        </a>
                    </div>
                </div>
            <?php
        };
    ?>
</div>
