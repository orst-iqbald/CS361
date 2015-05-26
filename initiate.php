<?php
ini_set('display_errors', 'On');
include 'connection.php';
if (!$mysqli->query("DROP TABLE IF EXISTS healthstats") ||
    !$mysqli->query("CREATE TABLE healthstats(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, GPS CHAR(225), reminder CHAR(225), weather CHAR(225), vsigns CHAR(255))"))
    echo "healthstats creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
?>
