<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.21-cookie.php
setcookie('myCookie', '123', time() + 3600);
//setcookie('myCookie', '123', time());
var_dump($_COOKIE['myCookie']);
