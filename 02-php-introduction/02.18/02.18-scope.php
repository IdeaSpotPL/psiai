<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.18-scope.php
ini_set('display_errors', true);
$a = 10;
$b = 20;

function myFunction()
{
    global $a;
    $localB = $GLOBALS['b'];

    echo "'$a' '$b' '$localB'<br/>";
}

myFunction();
echo "'$a' '$b' '$localB'<br/>";
