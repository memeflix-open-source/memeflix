<?php

Class Router {
    static function route(){
        $route_found = false;

        $request_uri_path_count = uri_path_counter($_SERVER['REQUEST_URI']);

        $paths = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $path1 = $paths[0] ?? null;
        $path2 = $paths[1] ?? null;
        $path3 = $paths[2] ?? null;
        $path4 = $paths[3] ?? null;
        $path5 = $paths[4] ?? null;


        switch( $request_uri_path_count ){
            case 0:
                include PROJECT_PATH.'/src/memeflix/php/pages/home/home.php';
                $route_found = true;
            break;
            case 1:
            break;
            case 2:
                
            break;
            case 3:
                
            break;
        };

        if( $route_found === false ){
            include PROJECT_PATH.'/src/memeflix/php/pages/404/404.html';
        };
    }
}