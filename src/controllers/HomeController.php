<?php

namespace src\controllers;

use \core\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $this->render('home', ['nome' => 'Roney!!!']);
    }

    public function foto($id)
    {
        echo "FOTO -> " . $id['id'];
    }

    public function sobre()
    {
        $this->render('sobre');
    }

    public function sobreP($args)
    {
        print_r($args);
    }
}
