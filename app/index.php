<?php
$url = $_SERVER['REQUEST_URI'];
$pattern = "/(\/api\/)\w+/";

if(preg_match($pattern, $url)){
    echo 'api';
    return;
}

include_once __DIR__.'/../layouts/default.php';