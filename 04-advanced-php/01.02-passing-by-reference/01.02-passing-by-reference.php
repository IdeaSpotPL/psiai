<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//01.02-passing-by-reference.php
$a = 10;

function setToTwenty(&$parameter)
{
    $parameter = 20;
}

setToTwenty($a);

var_dump($a);
// int 20
