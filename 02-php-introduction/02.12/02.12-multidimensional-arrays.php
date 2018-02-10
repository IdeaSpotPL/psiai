<?php
/**
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.12-multidimensional-arrays.php
$characters = array(
    'Targaryen' => array(
        'Daenerys' => true,
        'Rhaegar' => true,
    ),
    'Stark' => array(
        'Arya' => true,
        'Sansa' => true,
        'Eddard' => true,
    ),
    'Lannister' => array(
        'Tyrion' => true,
        'Cersei' => true,
    ),
);

var_dump($characters);
echo "Is Eddard Stark still alive? " . ($characters['Stark']['Eddard'] ? 'Yes' : 'No') . '<br/>';

$characters['Stark']['Eddard'] = false;
var_dump($characters);
echo "Is Eddard Stark still alive? " . ($characters['Stark']['Eddard'] ? 'Yes' : 'No') . '<br/>';
