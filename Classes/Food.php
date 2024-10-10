<?php
class Food extends Articles
{
    public string $foodQuality;

    public function __construct(string $articleName, string $articleImg, float $articlePrice, Category $category, string $foodQuality)
    {

        parent::__construct($articleName, $articleImg, $articlePrice, $category);
        $this->foodQuality = $foodQuality;
    }
}

new Food('Creazioni speciali umido', 'https://www.libero.it/shopping/wp-content/uploads/2021/07/cibo-umido-per-gatti_sheba.jpg,', 3.99, $catEgory, 'Coniglio, anatra e verdure');
new Food('Friskies croccantini', 'https://m.media-amazon.com/images/I/41aoRbFoZSL.jpg', 29.99, $dogCategory, '100% Carne Italiana');
new Food('Erba Gatta Geande Orto', 'https://media.adeo.com/marketplace/LMIT/81252296/197713.jpeg', 14.99, $catEgory, 'High Quality Catnip');
