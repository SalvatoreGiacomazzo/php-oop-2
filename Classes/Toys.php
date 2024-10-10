<?php

class Toys extends Articles
{
    public string $toyType;

    public function __construct(string $articleName, string $articleImg, float $articlePrice, Category $category, string $toyType)
    {

        parent::__construct($articleName, $articleImg, $articlePrice, $category);
        $this->toyType = $toyType;
    }
}
