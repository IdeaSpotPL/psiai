<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.02-prepared-statements.php
$pdo = new PDO('mysql:dbname=defaultdb; host=127.0.0.1', 'defaultuser', '12345678');
$statement = $pdo->prepare('SELECT * FROM users WHERE id = :id');


for ($i = 1; $i < 10; $i++) {
    $result = $statement->execute(array(
        'id' => $i,
    ));
    if ($result) {
        while ($row = $statement->fetch()) {
            var_dump($row);
        }
    } else {
        var_dump($statement->errorInfo());
    }
}
