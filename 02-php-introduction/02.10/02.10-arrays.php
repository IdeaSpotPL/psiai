<?php
/**
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.10-arrays.php
$orderStatuses = array(
    'new',
    'in progress',
    'shipped',
);

$orderStatuses[] = 'ready for shipment';

$orderStatuses[2] = 'complete';

var_dump($orderStatuses);
