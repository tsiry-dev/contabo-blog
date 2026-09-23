<?php

namespace App\Controller;


abstract class Controller
{

    protected function render(string $path, array $data = [])
    {

        extract($data);

        require_once PATH . '/templates/layouts/header.html.php';
        require_once PATH . "/templates/pages/{$path}.html.php";
        require_once PATH . '/templates/layouts/footer.html.php';
    }


    protected function redirectTo(string $path)
    {
        header("Location: {$path}");
    }
}
