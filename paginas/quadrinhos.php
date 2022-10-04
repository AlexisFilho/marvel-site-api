<h1>
    Aqui irão ficar os quadrinhos
</h1>
<div class="row">
<?php
    //arquivo que sera executado
    $arquivo = "https://gateway.marvel.com/v1/public/comics?{$url}";

    //recupera os dados do arquivo
    $dados = file_get_contents($arquivo);

    //tranformar json em objeto
    $dados = json_decode($dados);

    foreach($dados->data->results as $quadrinho){
        //echo"<p>{$filme->title}</p>";
        $image = $quadrinho->thumbnail->path;
        $extension = $quadrinho->thumbnail->extension;
        $cover = $image.".".$extension;
        ?>
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="<?=$cover?>" alt="<?=$quadrinho->title?>" class="w-100">
                    <div class="card-body text-center">
                        <p class="titulo">
                            <strong>
                                <?=$quadrinho->title?>
                            </strong>
                        </p>
                        <p>
                            <a href="quadrinho/<?=quadrinho->id?>" class="btn btn-warning">
                                Ver detalhes
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        <?php
    };