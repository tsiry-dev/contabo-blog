<?php

namespace App\Controller;

use App\Controller\Controller;

class PostController extends Controller
{
    public function index()
    {
        $this->render('posts/index');
    }
}
