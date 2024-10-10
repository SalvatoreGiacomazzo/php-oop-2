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

//articoli bed
new Beds('Cuccetta elegante', 'https://images-na.ssl-images-amazon.com/images/I/81rxJWD0oDL._AC_SL1500_.jpg', 25.99, $catEgory, 'Small');
new Beds('Rifugio rustico', 'https://www.deabyday.tv/dam/jcr:13a4ca43-137a-4109-b30a-5afe6cd427f5/cuccia-con-veranda-in-legno.2020-12-01-20-05-30', 400.99, $dogCategory, 'XXL');
new Beds('Cuccia da esterno', 'https://treview.it/wp-content/uploads/2023/01/Cuccia-da-esterno-per-gatto-1230x615.jpg', 35.45, $catEgory, 'M');
