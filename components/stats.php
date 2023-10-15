<?php

require_once 'InsertDB.php';
InsertDB::instanciate();
$results = InsertDB::getDB();
$last_ten = array_slice($results, 0, 10);
$average = array_reduce($results, fn ($carry, $item) => $carry += $item['value'], 0)
?>


<div class="stats">
    <?php if (!empty($results)) : ?>
        <h5>Last 10 rolls</h5>
        <ul style="display: flex;">
            <?php foreach ($last_ten as $array) : ?>
                <?php foreach ($array as $key => $value) : ?>
                    <li style="display: flex;">
                        <div><?= $key; ?> => <?= $value; ?></div>
                    </li>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
        <h5>Average result</h5>
        <?= $average / count($results); ?>
    <?php endif; ?>
</div>