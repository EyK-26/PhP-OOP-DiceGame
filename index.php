<?php
require_once 'components/validate.php';
require_once 'components/Get_Session_Data.php';

Get_Session_Data::get_session_data();
$results = Get_Session_Data::$results;
$entered_side = Get_Session_Data::$entered_side;
$entered_dice = Get_Session_Data::$entered_dice;
$errors = Get_Session_Data::$errors;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Throwing Game OOP</title>
</head>

<body>
    <div class="errors">
        <?php include 'components/errors.php' ?>
        <hr>
    </div>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="dice-sides">Select the number of sides: </label>
        <select id="dice-sides" name="dice-sides">
            <option value="">Please select a value</option>
            <option value="4">4</option>
            <option value="6">6</option>
            <option value="10">10</option>
            <option value="20">20</option>
        </select>
        <label for="number">Number of dices you want to throw</label>
        <input type="number" name="number" id="number" value="0" min="0">
        <input type="submit" value="submit">
    </form>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="submit" value="reset">
    </form>
    <hr>
    <span>number of sides you chose:</span>
    <?= $entered_side[0] ?? null ?>
    <hr>
    <span>number of dice you chose:</span>
    <?= $entered_dice ?? null ?>
    <hr>
    <?php include 'components/results.php' ?>
    <hr>
    <h4>Stats: </h4>
    <?php include 'components/stats.php' ?>
</body>

</html>