<?php

#   $url = "localhost";
#   $port = "8332";
#   $username = "bitcoind";
#   $password = "password";

    $response = json_decode(file_get_contents("http://nodes.p2pool.co/pools.dat"),true);
    $url = $response[0]['name'];
    $port = $response[0]['port'];
    $username = "1Fa2uuQ3rLsYovnuzn7fvWZErg6Q4P3W1D";
    $password = "LBP123.123ground";
?>
