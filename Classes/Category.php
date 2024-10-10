<?php
class Category
{
    public string $categoryName;
    public string $categorySymbol;



    public function __construct($categoryName, $categorySymbol)
    {
        $this->categoryName = $categoryName;
        $this->categorySymbol = $categorySymbol;
    }
}


$dogCategory = new Category('Ideale per il tuo cane!', '<i class="fa-solid fa-dog"></i>');
$catEgory = new Category('Perfetto per il tuo gatto!', '<i class="fa-solid fa-cat"></i>');
