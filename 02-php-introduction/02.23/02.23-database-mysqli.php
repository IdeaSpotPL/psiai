<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.23-database-mysqli.php
$conn = mysqli_connect('127.0.0.1', 'defaultuser', '12345678', 'defaultdb');
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if (! $result) {
    die("Error: " . mysqli_error($conn));
}

$users = array();
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}

foreach ($users as $user) {
    var_dump($user);
}

?>
<form method="post" action="02.23-database-mysqli-submit.php">
    <input type="text" placeholder="username" name="username" />
    <input type="text" placeholder="first name" name="firstName" />
    <input type="text" placeholder="last name" name="lastName" />
    <input type="submit" value="Submit" />
</form>
