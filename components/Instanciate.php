<?php
require_once 'Session.php';

class Instanciate
{
    public static ?array $results = [];
    public static $entered_side = null;
    public static ?int $entered_dice = 0;
    public static function instanciate()
    {
        Session::instanciate();
        static::$results = Session::get_sessionData('NUMBER') ?? [];
        static::$entered_side = Session::get_sessionData('ENTERED_SIDE') ?? null;
        static::$entered_dice = count(static::$results);
        Session::unset_session('NUMBER');
        Session::unset_session('ENTERED_SIDE');
    }
}
