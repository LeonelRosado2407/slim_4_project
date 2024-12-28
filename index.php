<?php
require (__DIR__.'/vendor/autoload.php');
use Slim\Factory\AppFactory;
use Slim\Views\Twig;

use App\Controllers\HomeController;
use Slim\Views\TwigMiddleware;

$app = AppFactory::create();

$twig = Twig::create(__DIR__ . '/src/Views', ['cache' => false]);

$app->add(TwigMiddleware::create($app, $twig));

$app->get('/', HomeController::class . ':index');

$app->run();
