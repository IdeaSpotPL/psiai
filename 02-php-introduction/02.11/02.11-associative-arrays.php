<?php
/**
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.11-associative-arrays.php
$valentinesDay = array(
    'day' => 14,
    'month' => 'February',
);
$valentinesDay['year'] = date('Y');

var_dump($valentinesDay);

echo "This year Valentine's Day is on {$valentinesDay['day']} {$valentinesDay['month']} {$valentinesDay['year']}";
