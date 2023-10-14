<?php
require_once(__DIR__ . '/../model/Custom_Dice.php');
require_once 'Session.php';
require_once 'InsertDB.php';

class Create
{
    public static function create(int $required_number, int $side_number): void
    {
        if ($required_number > 0 && $side_number > 0) {
            Session::instanciate();
            $count = 0;
            while ($count < $required_number) {
                $dice = new Custom_Dice($side_number);
                $returned_number = $dice->roll();
                Session::set_sessionData('NUMBER', $returned_number);
                Session::set_sessionData('ENTERED_SIDE', $dice);
                InsertDB::instanciate();
                InsertDB::insertDB($side_number, $returned_number);
                $count++;
            }
        }
        return;
    }
    public static function fail(string $key, string $message): void
    {
        Session::instanciate();
        Session::set_sessionData($key, $message);
    }
}
