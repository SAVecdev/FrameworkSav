<?php

namespace FrameworkSav;

class Auth
{
    public static function login($username, $password)
    {
        // Aquí puedes agregar la lógica de autenticación
        $_SESSION['user'] = $username;
    }

    public static function logout()
    {
        unset($_SESSION['user']);
    }

    public static function check()
    {
        return isset($_SESSION['user']);
    }

    public static function user()
    {
        return $_SESSION['user'] ?? null;
    }
}
