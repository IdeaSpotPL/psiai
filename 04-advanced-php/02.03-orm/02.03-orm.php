<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//02.03-orm.php
require_once __DIR__ . '/02.03-orm-entity.php';
require_once __DIR__ . '/02.03-orm-repository.php';

$userRepository = new UserRepository();

for ($i = 1; $i < 10; $i++) {
    $user = $userRepository->findById($i);
    var_dump($user);
    if ($user) {
        var_dump($user->getName());
    }
}
