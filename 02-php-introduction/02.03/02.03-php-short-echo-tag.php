<?php
/**
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.03-php-short-echo-tag.php
$title = "Welcome to PHP!";
$date = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<?= $title ?><br/>
Today is: <strong><?= $date ?></strong>
</body>
</html>

