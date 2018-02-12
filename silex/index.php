<?php

use Symfony\Component\HttpFoundation\JsonResponse;

require_once __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use ($app){
    return 'hello silex';
});

$app->get('/beispiel-2', function () use ($app) {
    $data = range(0, 100);
    array_walk($data, function (&$item) {
        $item = [
            'name'   => "item {$item}",
            'rating' => rand(0, 5)
        ];
    });
    return new JsonResponse($data);
});

$app->run();