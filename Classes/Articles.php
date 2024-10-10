<?php
class Articles
{

    public string $articleName;
    public string $articleImg;
    public float $articlePrice;
    public Category $category;

    //Array che conterrà tutti i prodotti
    public static array $allArticles = [];


    public function __construct($articleName, $articleImg, $articlePrice, Category $category)
    {
        $this->articleName = $articleName;
        $this->articlePrice = $articlePrice;
        $this->articleImg = $articleImg;
        $this->category = $category;

        self::$allArticles[] = $this;
    }
}
