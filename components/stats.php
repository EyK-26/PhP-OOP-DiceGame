<?php

require_once 'InsertDB.php';
InsertDB::instanciate();
$results = InsertDB::getDB();
var_dump($results);
?>

<!-- <div class="stats">

</div> -->