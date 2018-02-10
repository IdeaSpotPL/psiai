<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//03.06-preg_replace.php
$subject = date('Y-m-d');
$pattern = "/(\d\d\d\d)-(\d\d)-(\d\d)/";
$replaceWith = "$3.$2.$1";
$result = preg_replace($pattern, $replaceWith, $subject, -1, $count);
var_dump($result);
var_dump($count);
