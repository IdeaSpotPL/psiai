<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//01.13-interface.php
interface HistoryAwareInterface
{
    function getCreatedAt();
    function getCreatedBy();
    function getModifiedAt();
    function getModifiedBy();
}
