<?php

function uri_path_counter( string $uri ) :int {
    
    $url = parse_url($uri, PHP_URL_PATH);
    $x = trim($url, '/');
    $y = explode( '/', $x);
    $z = array_filter($y);

    return count($z);
};