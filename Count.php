<?php
// File : Count.php
class Count
{
    public function count($sentence)
    {
        return count(explode(" ",$sentence));
    }
}
?>