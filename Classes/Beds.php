<?php
class Beds extends Articles
{

    public float $bedSize;

    public function __construct($bedSize)
    {
        $this->bedSize = $bedSize;
    }
}
