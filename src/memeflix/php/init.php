<?php 

define('PROJECT_PATH', dirname(dirname(dirname(__DIR__))) );

//Load all composer packages and all Memeflix classes
require PROJECT_PATH.'/src/memeflix/php/packages/v1/vendor/autoload.php';

Toolkit::load_all_utils();

Toolkit::load_all_helpers();

Router::route();