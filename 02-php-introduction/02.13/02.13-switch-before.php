<?php
/**
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.13-switch-before.php
$status = 'completed';

if ($status == 'new') {
    $statusString = 'Order just received!';
} elseif ($status == 'in progress') {
    $statusString = "We are working on your order.";
} elseif ($status == "completed") {
    $statusString = "This order is completed.";
} else {
    $statusString = "Invalid order status.";
}

echo $statusString;
