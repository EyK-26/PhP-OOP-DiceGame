<?php

class UnsetSession
{
    public static function unsetSession(): void
    {
        if (isset($GLOBALS['_SESSION'])) { //if session array exists
            $sessionKeys = $GLOBALS['_SESSION']; //get all the session array
            foreach ($sessionKeys as $key => $_) { //unset recursively all keys
                unset($_SESSION[$key]);
            }
        }
        var_dump($_SESSION);
        return;
    }
}
