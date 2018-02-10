<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.01-pdo.php
$pdo = new PDO('mysql:dbname=defaultdb; host=127.0.0.1', 'defaultuser', '12345678');
$sql = 'SELECT * FROM users WHERE id >= 0 AND id <= 10';
$statement = $pdo->query($sql);
if ($statement) {
    while ($row = $statement->fetch()) {
        var_dump($row);
    }
} else {
    var_dump($statement->errorInfo());
}
