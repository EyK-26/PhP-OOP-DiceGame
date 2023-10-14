<?php
require_once 'components/validate.php';
require_once 'components/Instanciate.php';

Instanciate::instanciate();
$results = Instanciate::$results;
$entered_side = Instanciate::$entered_side;
$entered_dice = Instanciate::$entered_dice;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Throwing Game OOP</title>
</head>

<body>
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
        <br>
        <input type="submit" value="submit">
    </form>
    <hr>
    <span>number of sides you chose:</span>
    <?= $entered_side[0] ?? null ?>
    <hr>
    <span>number of dice you chose:</span>
    <?= $entered_dice ?? null ?>
    <hr>
    <?php include 'components/results.php' ?>
</body>

</html>