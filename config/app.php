<?php

define('APP_TITLE','damavand');
define('BASE_URL','http://localhost:8007'); // php -S localhost:8007 -t public
define('BASE_DIR',realpath(__DIR__."/../"));

$temporary=str_replace(BASE_URL,'',explode('?',$_SERVER['REQUEST_URI'])[0]);
$temporary==="/" ? $temporary= "" : $temporary=substr($temporary,1);
define('CURRENT_ROUT',$temporary);

global $routes;
$routes=
[
    'get' => [],
    'post' => [],
    'put' => [],
    'delete' => []
];