<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//01.09-final.php
final class Employee {}
//class JuniorEmployee extends Employee{} // fatal error

class Student {
    final public function getName() {}
}
//class Graduate extends Student {
//    public final function getName() {} // fatal error
//}
