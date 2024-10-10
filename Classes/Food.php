<?php
class Food extends Articles
{

    public string $foodQuality;


    public function __constructor($foodQuality)
    {
        $this->foodQuality = $foodQuality;
    }
}
