<?php

namespace FrameworkSav\Controllers;

use FrameworkSav\View;

class FormController
{
    public function show()
    {
        View::render('form');
    }

    public function submit()
    {
        $name = $_POST['name'] ?? 'Guest';
        View::render('submit', ['name' => $name]);
    }
}
