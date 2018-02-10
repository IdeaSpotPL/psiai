<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.23-database-mysqli-submit.php
if (empty($_REQUEST['username']) || empty($_REQUEST['firstName']) || empty($_REQUEST['lastName'])) {
    die("Invalid input.");
}

$conn = mysqli_connect('127.0.0.1', 'defaultuser', '12345678', 'defaultdb');
$sql = "INSERT INTO users (username, firstName, lastName) VALUES ('{$_REQUEST['username']}', '{$_REQUEST['firstName']}', '{$_REQUEST['lastName']}')";
$result = mysqli_query($conn, $sql);
if (! $result) {
    die("Error: " . mysqli_error($conn));
}

header('Location: 02.23-database-mysqli.php');

?>
