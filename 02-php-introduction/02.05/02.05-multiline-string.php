<?php
/**
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.05-multiline-string.php
$title = "Welcome to PHP!";
$date = date('Y-m-d');

$html = <<<EOT
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>$title</title>
</head>
<body>
$title<br/>
Today is: <strong>$date</strong>
</body>
</html>
EOT;

echo $html;
