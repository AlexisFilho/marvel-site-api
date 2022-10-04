<?php 
    $privatekey = "ece433bea8a5f378b35cc19c15789f05b8e75a52";
    $publickey = "86e16f88eaf2546f408c1d3e5951337c";
    $time = time();

    function gerarhash($privatekey, $publickey, $time) {
        return md5( $time . $privatekey . $publickey );
    }

    $hash = gerarhash($privatekey, $publickey, $time);

    // Esta url se ao fato de que essa api necessita de um hash que é gerado através das informações privatekey,
    // publickey e timestamp, para a utilização de seus recursos.
    // $url = "http://gateway.marvel.com/v1/public/comics?ts={$time}&apikey={$plublickey}&hash={$hash}";
    define("URLL", "?ts={$time}&apikey={$publickey}&hash={$hash}");
    define("IMG", "http://i.annihil.us/u/prod/marvel/i/mg/");

    echo URLL;
?>