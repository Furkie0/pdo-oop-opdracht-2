<?php 

include('db.php');

$connectie = new Database();

$connectie->telefoons("nokia", "3310", "10", "100");
?>