<?php
class Toys extends Articles
{

    public string $toyType;

    public function __construct($toyType)
    {
        $this->toyType = $toyType;
    }
}
