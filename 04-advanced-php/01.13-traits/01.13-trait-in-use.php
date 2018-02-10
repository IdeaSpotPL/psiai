<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//01.13-trait-in-use.php
require_once __DIR__ . '/01.13-interface.php';
require_once __DIR__ . '/01.13-trait.php';

class Application implements HistoryAwareInterface
{
    use HistoryAwareTrait;
}

$application = new Application();
$application->setCreatedAt(new \DateTime());
$application->setModifiedAt(new \DateTime());
$application->setCreatedBy('alice');
$application->setModifiedBy('alice');

var_dump($application);
