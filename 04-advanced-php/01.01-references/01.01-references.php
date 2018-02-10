<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//01.01-references.php
$myVariable = 'abc';
$myArray = array(
    'Jon',
    'Arya',
    'Eddard',
);

$variableRef = &$myVariable;
$arrayRef = &$myArray;
$arrayElementRef = &$myArray[0];

$variableRef = 'def';
$arrayElementRef = 'Daenerys';

var_dump($myVariable);
var_dump($myArray);
