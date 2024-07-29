<?php

namespace FrameworkSav\Controllers;

use FrameworkSav\View;
use FrameworkSav\Auth;

class AuthController
{
    public function showLoginForm()
    {
        View::render('login');
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        Auth::login($username, $password);
        header('Location: /');
    }

    public function logout()
    {
        Auth::logout();
        header('Location: /');
    }
}
