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
        echo "About Page";
    }
}

$router = new Router();
$router->add('GET', '/', [SiteController::class, 'home']);
$router->add('GET', '/about', [SiteController::class, 'about']);


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($path);
