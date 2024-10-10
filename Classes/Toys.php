<?php

class Toys extends Articles
{
    public string $toyDesc;

    public function __construct(string $articleName, string $articleImg, float $articlePrice, Category $category, string $toyDesc)
    {

        parent::__construct($articleName, $articleImg, $articlePrice, $category);
        $this->toyDesc = $toyDesc;
    }
}
