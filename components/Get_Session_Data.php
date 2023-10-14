<?php
require_once 'Session.php';

class Get_Session_Data
{
    public static ?array $results = [];
    public static ?array $errors = [];
    public static $entered_side = null;
    public static ?int $entered_dice = 0;
    public static function get_session_data()
    {
        Session::instanciate();
        static::$results = Session::get_sessionData('NUMBER') ?? [];
        static::$entered_side = Session::get_sessionData('ENTERED_SIDE') ?? null;
        static::$errors = Session::get_sessionData('ERRORS') ?? null;
        static::$entered_dice = count(static::$results);
        static::remove('NUMBER', 'ENTERED_SIDE', 'ERRORS');
    }

    public static function remove(...$keys): void
    {
        foreach ($keys as $key) {
            Session::unset_session($key);
        }
        // Session::unset_session('NUMBER');
        // Session::unset_session('ENTERED_SIDE');
        // Session::unset_session('ERRORS');
    }
}
