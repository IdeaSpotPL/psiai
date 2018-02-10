<?php
/**
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.14-foreach.php
$characters = array(
    'Targaryen' => array(
        'Daenerys' => true,
        'Rhaegar' => true,
    ),
    'Stark' => array(
        'Arya' => true,
        'Sansa' => true,
        'Eddard' => false,
    ),
    'Lannister' => array(
        'Tyrion' => true,
        'Cersei' => true,
    ),
);

foreach ($characters as $lastname => $familyMembers) {
    echo "$lastname family<br/>";
}
