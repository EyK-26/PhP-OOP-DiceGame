<?php

class Session
{
    public static ?self $instance = null;
    public static function instanciate()
    {
        if (!static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }

    private function __construct()
    {
        session_start();
    }

    public static function set_sessionData(string $key, int|string $data): void
    {
        $_SESSION[$key][] = $data;
        return;
    }

    public static function get_sessionData(string $key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public static function unset_session(string $key): void
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
        return;
    }
}
