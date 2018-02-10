<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//01.05-constructors.php
class Student
{
    public function __construct($id = null)
    {
        if ($id) {
            // load user from DB
        }
    }
}

$alice = new Student(3);
$bob = new Student(5);
