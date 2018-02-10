<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.17-optional-parameter.php
function sayHello($name = "Traveller")
{
    echo "Hello $name!<br/>";
}

sayHello('Jon');
sayHello();
