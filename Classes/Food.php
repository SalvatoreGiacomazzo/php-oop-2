<?php
include_once 'IsVegan.php';
include_once 'Articles.php';

class Food extends Articles

{
    use isVegan;

    public string $foodQuality;

    public function __construct(string $articleName, string $articleImg, float $articlePrice, Category $category, string $foodQuality)
    {

        parent::__construct($articleName, $articleImg, $articlePrice, $category);
        $this->foodQuality = $foodQuality;
    }
}
