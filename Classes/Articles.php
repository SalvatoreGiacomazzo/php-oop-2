<?php
class Articles
{

    public string $articleName;
    public string $articleImg;
    public float $articlePrice;
    public Category $category;
    public string $type;

    public function __construct($articleName, $articleImg, $articlePrice, $category, $type)
    {
        $this->articleName = $articleName;
        $this->articlePrice = $articlePrice;
        $this->articleImg = $articleImg;
        $this->category = $category;
        $this->type = $type;
    }
}
