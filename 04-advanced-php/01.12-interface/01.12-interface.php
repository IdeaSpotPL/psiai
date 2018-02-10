<?php
/*
 * Introduction to PHP lectures supplemental code.
 * Created by Artur Karczmarczyk.
 * https://ideaspot.pl
 */

//01.12-interface.php
interface HistoryAwareInterface
{
    function getCreatedAt();
    function getCreatedBy();
    function getModifiedAt();
    function getModifiedBy();
}

class Lab implements HistoryAwareInterface
{

    function getCreatedAt()
    {
        // TODO: Implement getCreatedAt() method.
    }

    function getCreatedBy()
    {
        // TODO: Implement getCreatedBy() method.
    }

    function getModifiedAt()
    {
        // TODO: Implement getModifiedAt() method.
    }

    function getModifiedBy()
    {
        // TODO: Implement getModifiedBy() method.
    }
}
