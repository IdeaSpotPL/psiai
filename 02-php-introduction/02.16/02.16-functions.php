<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.16-functions.php
function sayHello($name)
{
    echo "Hello $name!<br/>";
}

foreach (array('Jon', 'Arya', 'Eddard') as $characterName) {
    sayHello($characterName);
}
