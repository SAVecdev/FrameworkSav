<?php

namespace FrameworkSav;

class View
{
    public static function render($view, $data = [])
    {
        extract($data);
        include __DIR__ . '/../Views/' . $view . '.php';
    }
}
