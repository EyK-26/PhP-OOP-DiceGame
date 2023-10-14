<?php
require_once 'Dice.php';
require_once 'Session.php';

class Create
{
    public static function create(int $required_number, int $side_number): void
    {
        Session::instanciate();
        $count = 0;
        while ($count < $required_number) {
            $dice = new Dice($side_number);
            $returned_number = $dice->roll();
            Session::set_sessionData('NUMBER', $returned_number);
            Session::set_sessionData('ENTERED_SIDE', $dice);
            $count++;
        }
    }
}
