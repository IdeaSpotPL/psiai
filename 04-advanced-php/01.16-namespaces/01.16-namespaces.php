<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//01.16-namespaces.php
require_once __DIR__ . '/01.16-DateTime.php';

$dateTime1 = new \MyNamespace\DateTime();
$dateTime2 = new \DateTime();

var_dump($dateTime1->format('Y-m-d'));
var_dump($dateTime2->format('Y-m-d'));
