<?php
class Articles
{

    public string $articleName;
    public string $articleImg;
    public float $articlePrice;
    public Category $category;
    public string $shop;

    public function __construct($articleName, $articleImg, $articlePrice, $category, $shop)
    {
        $this->articleName = $articleName;
        $this->articlePrice = $articlePrice;
        $this->articleImg = $articleImg;
        $this->category = $category;
        $this->shop = $shop;
    }
}
