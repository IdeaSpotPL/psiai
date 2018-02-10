<?php
/**
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.13-switch-after.php
$status = 'completed';

switch ($status) {
    case 'new':
        $statusString = 'Order just received!';
        break;
    case 'in progress':
        $statusString = "We are working on your order.";
        break;
    case 'completed':
        $statusString = "This order is completed.";
        break;
    default:
        $statusString = "Invalid order status.";
        break;
}

echo $statusString;
