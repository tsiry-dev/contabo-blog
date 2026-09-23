<?php

use App\Controller\CategoryController;
use App\Controller\HomeController;
use App\Controller\PostController;

$router = new AltoRouter();

/*-----------Controllers------------*/
$homeController = new HomeController();


$router->map('GET', '/', function () use ($homeController) {
    $homeController->index();
});

$router->map('GET', '/posts', function () {
    (new PostController)->index();
});

$router->map('GET', '/categories', function () {
    (new CategoryController)->index();
});

$router->map('GET', '/categories/create', function () {
    (new CategoryController)->create();
});

$router->map('POST', '/categories/create', function () {
    (new CategoryController)->store();
});

$router->map('GET', '/categories/[i:id]/edit', function (int $id) {
    (new CategoryController)->edit([], $id);
});

$router->map('POST', '/categories/update/[i:id]', function (int $id) {
    (new CategoryController)->update($id);
});

$router->map('POST', '/categories/destroy/[i:id]', function (int $id) {
    (new CategoryController)->destroy($id);
});

// match current request url
$match = $router->match();

// call closure or throw 404 status
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
