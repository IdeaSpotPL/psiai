<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//04.01-UserTest.php
require_once __DIR__ . '/04.01-User.php';

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetName()
    {
        $user = new User();
        $user->setFirstName('Jon')->setLastName('Snow');
        $name = $user->getName();
        $this->assertEquals('Jon Snow', $name, 'Error when both first and last names are provided');

        $user = new User();
        $user->setFirstName('Jon');
        $this->assertEquals('Jon', $name, 'Error when last name is not provided');
    }
}
