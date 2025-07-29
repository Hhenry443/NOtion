<?php
require './Router.php';

class SiteController
{
    public function home()
    {
        include './public/home.php';
    }

    public function about()
    {
        // this is how to get the url from server, this will be used to get page id?
        echo strval($_SERVER['REQUEST_URI']);
        die;
    }

    public function error()
    {
        echo "About Page";
    }
}

$router = new Router();
$router->add('GET', '/', [SiteController::class, 'home']);
$router->add('GET', '/about', [SiteController::class, 'about']);
$router->add('GET', '/error', [SiteController::class, 'error']);


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($path);
