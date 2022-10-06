<?php
    $id = $param[1] ?? NULL;

    //verificar se está em branco
    if (empty($id)){
        ?>
            <p class="alert alert-danger text-center">
                Erro! Quadrinho se localiza em uma realidade alternativa.
            </p>
        <?php
    } else{
        $arquivo = "https://gateway.marvel.com/v1/public/comics/{$id}".URL;
        
        $dados = file_get_contents($arquivo);

        $dados = json_decode($dados);

        $quadrinho = $dados->data->results[0];

        $image = $quadrinho->thumbnail->path;
        $extension = $quadrinho->thumbnail->extension;
        $cover = $image.".".$extension;

        ?>
        <div class="card">
            <div class="row">
                <div class="col-12 col-md-3">
                    <img src="<?=$cover?>" alt="<?=$quadrinho->title?>" class="w-100">
                </div>
                <div class="col-12 col-md-9">
                    <h1 class="text-center"><?=$quadrinho->title?></h1>
                    <br>
                    <p><?=$quadrinho->textObjects[0]->text?></p>

                </div>
            </div >
        </div>
        <h3 class="text-center">Personagens:</h3>
        <div class="row">
            <?php
                $arquivo = "http://gateway.marvel.com/v1/public/comics/{$id}/characters".URL;

                $dados = file_get_contents($arquivo);

                $dados = json_decode($dados);

                foreach($dados->data->results as $personagem){

                    $image = $personagem->thumbnail->path;
                    $extension = $personagem->thumbnail->extension;
                    $foto = $image.".".$extension;

                    ?>
                        <div class="col-12 col-md-3">
                            <div class="card text-center">
                                <img src="<?=$foto?>" alt="<?=$personagem->name?>" class="w-100">
                                <p class="titulo">
                                    <?=$personagem->name?>
                                </p>
                                <p>
                                    <a href="personagem/<?=$personagem->id?>" class="btn btn-warning">
                                        Ver mais
                                    </a>
                                </p>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
        <h3 class="text-center">Sagas:</h3>
        <div class="row">
            <?php
                $arquivo = "http://gateway.marvel.com/v1/public/comics/{$id}/stories".URL;

                $dados = file_get_contents($arquivo);

                $dados = json_decode($dados);

                foreach($dados->data->results as $sagas){
                    
                    if ($dados->data->results->thumbnail !== NULL){
                        $image = $sagas->thumbnail->path;
                        $extension = $sagas->thumbnail->extension;
                        $foto = $image.".".$extension;
                    }else{
                        $image = "http://i.annihil.us/u/prod/marvel/i/mg/b/40/image_not_available";
                        $extension = "jpg";
                        $foto = $image.".".$extension;
                    }

                    ?>
                        <div class="col-12 col-md-3">
                            <div class="card text-center">
                                <img src="<?=$foto?>" alt="<?=$sagas->title?>" class="w-100">
                                <p class="titulo">
                                    <?=$sagas->title?>
                                </p>
                                <p>
                                    <a href="stories/<?=$sagas->id?>" class="btn btn-warning">
                                        Ver mais
                                    </a>
                                </p>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>

        <?php
    }