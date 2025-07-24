<?php

# APP_TITLE =>  project names
# BASE_URL => your host port empty
# run project => php -S localhost:{prot hot} -t public
# 8007 => prot host

define('APP_TITLE','damavand'); 
define('BASE_URL','http://localhost:8007');
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