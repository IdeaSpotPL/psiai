<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.22-session-info.php
session_start();
if (isset($_SESSION) && isset($_SESSION['uid'])) {
    echo "Current user: {$_SESSION['uid']}, session id: " . session_id();
} else {
    echo "No session started.";
}
