<?php
trait isVegan
{
    public bool $isVegan;

    //funzione del tratto che imposta un prodotto vegano 
    public function setIsVegan(bool $isVegan)
    {
        $this->isVegan = $isVegan;
    }
    //funzione del tratto che controlla se un prodotto è vegano o no
    public function getIsVegan(): string
    {
        return $this->isVegan ? '(Prodotto vegano <i class="fa-solid fa-seedling"></i>)' : '(Contiene derivati animali <i class="fa-solid fa-drumstick-bite"></i>)';
    }
}
