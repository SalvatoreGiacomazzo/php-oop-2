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

//articoli toy
new Toys('Kong Extreme', 'https://cdn.geapetshop.it/uploads/2020/12/4956.jpg', 6.80, $dogArticle, 'Indistruttibile.');
new Toys('Tiragraffi labirintico', 'https://www.tigri-domestiche-shop.it/3240-thickbox_default/tiragraffi-per-gatti-ex-8.jpg', 249.99, $catArticle, 'Preferirà una scatola.');
new Toys('Gioco in corda', 'https://contents.mediadecathlon.com/p2355658/k$60b684ce01bc8888d1b8c1e59c417c43/sq/giocattolo-cane-corda-stella-33-cm.jpg?format=auto&f=800x0', 12.80, $dogArticle, 'Strattonare? No Problem.');
