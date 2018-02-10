<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//03.16-rest.php
ini_set('display_errors', true);
$url = 'https://api.github.com/search/users?q=ideaspot';
$response = file_get_contents($url);
if (! $response) {
}
var_dump($response);

$json = json_decode($response);
var_dump($json);
