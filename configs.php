<?php 
    $privatekey = "ece433bea8a5f378b35cc19c15789f05b8e75a52";
    $plublickey = "86e16f88eaf2546f408c1d3e5951337c";
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