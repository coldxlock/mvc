<?php 

require __DIR__.'/vendor/autoload.php';

use \App\Http\Router;
use \App\Utils\View;

define('URL', 'http://localhost/mvc');

View::init([
    'URL' => URL
]);

// inicia os routes
$obRouter = new Router(URL);

//inclui as rotas de paginas
include __DIR__.'/routes/pages.php';

//imprime response da rota
$obRouter->run()
         ->sendReponse();
