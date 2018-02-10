<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.19-visit-counter.php
$counterPath = __DIR__ . '/counter.txt';

function readCounter($counterPath)
{
    $fp = fopen($counterPath, "r");
    $num = fgets($fp);
    $num = trim($num);
    fclose($fp);
    return $num;
}

function writeCounter($counterPath, $num)
{
    $fp = fopen($counterPath, "w");
    fwrite($fp, $num);
    fclose($fp);
}

$visits = readCounter($counterPath);
echo "Visits: $visits";

$visits += 1;
writeCounter($counterPath, $visits);
