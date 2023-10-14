<?php
require_once 'Create.php';

$number_dices = intval($_POST['number'] ?? null);
$dice_sides = intval($_POST['dice-sides'] ?? null);

if ($number_dices > 0 && $dice_sides > 0) {
    Create::create($number_dices, $dice_sides);
}
