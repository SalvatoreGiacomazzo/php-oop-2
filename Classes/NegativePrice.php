<?php
class NegativePrice extends Exception
{

    public function __construct($message = "Prezzo minore di zero, errore")
    {
        parent::__construct($message);
    }
}
