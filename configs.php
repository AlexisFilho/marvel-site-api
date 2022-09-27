<?php 
    $privatekey = "c62445eb6952ac356e4fa17b5e738330dfdb18af";
    $plublickey = "873ccd8ecf37ff058ae01e7d6c0e38e7";
    $time = time();

    function gerarhash($privatekey, $plublickey, $time) {
        return md5( $time . $privatekey . $plublickey );
    }

    $hash = gerarhash($privatekey, $plublickey, $time);

    // Esta url se ao fato de que essa api necessita de um hash que é gerado através das informações privatekey,
    // publickey e timestamp, para a utilização de seus recursos.
    //$url = "http://gateway.marvel.com/v1/public/comics?ts={$time}&apikey={$plublickey}&hash={$hash}";

    //echo $url;
?>