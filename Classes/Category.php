<?php
class Category
{
    public string $categoryName;



    public function __construct($categoryName)
    {
        $this->categoryName = $categoryName;
    }
}


$dogCategory = new Category('Ideale per il tuo cane!');
$catEgory = new Category('Perfetto per il tuo gatto!');
