<?php

class Beds extends Articles
{
    public string $bedSize;

    public function __construct(string $articleName, string $articleImg, float $articlePrice, Category $category, string $bedSize)
    {

        parent::__construct($articleName, $articleImg, $articlePrice, $category);
        $this->bedSize = $bedSize;
    }
}
