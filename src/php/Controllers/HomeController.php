<?php

namespace FrameworkSav\Controllers;

use FrameworkSav\View;

class HomeController
{
    public function index()
    {
        $data = ['message' => 'Welcome to FrameworkSav Home!'];
        View::render('home', $data);
    }
}
