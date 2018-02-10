<?php
/**
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.02-php-in-html.php
$title = "Welcome to PHP!";
$date = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
<?php echo $title; ?><br/>
Today is: <strong><?php echo $date; ?></strong>
</body>
</html>
