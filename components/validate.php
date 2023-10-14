<?php
require_once 'Create.php';
require_once 'Session.php';

$number_dices = intval($_POST['number'] ?? null);
$dice_sides = intval($_POST['dice-sides'] ?? null);

if ($number_dices > 0 && $dice_sides > 0) {
    Create::create($number_dices, $dice_sides);
} else if (isset($_POST['reset'])) {
    Create::create(0, 0);
} elseif ((isset($_POST['number']) || isset($_POST['dice-sides']))) {
    if ($number_dices < 1) {
        Create::fail('ERRORS', 'Number of dices to roll cannot be 0');
    }
    if (($dice_sides < 1)) {
        Create::fail('ERRORS', 'Number of sides cannot be empty');
    }
}
