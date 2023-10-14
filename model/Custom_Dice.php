<?php
require_once 'Standard_Dice.php';
class Custom_Dice extends Standard_Dice
{
    public function __construct($sides)
    {
        parent::__construct($sides);
    }
}
