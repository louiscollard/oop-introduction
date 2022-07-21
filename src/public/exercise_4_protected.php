<?php

declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* EXERCISE 4
Copy the code of exercise 3 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
TODO: Don't call getters in de child class.
USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;

    }
    public function getInfo()
    {
        return "This beverage is $this->temperature and $this->color ";
    }
    public function getColor()
    {
        return $this->color;
    }
}

class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;
    public function __construct($color, $price,$name , $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getAlcoholPercentage()
    {
        return $this->alcoholPercentage;
    }
    public function getName()
    {
        return $this->name;
    }
    private function beerInfo(): string
    {
        return "Hi i'm {$this->getName()} and have an alcochol percentage of {$this->getAlcoholPercentage()} % and I have a {$this->getColor()} color.";
    }
    public function getBeerInfo(): string
    {
        return $this->beerInfo();
    }
}

$duvel = new Beer("light", 3.5, "Duvel", 8.5);

echo $duvel->getAlcoholPercentage();
echo "<br>";
echo $duvel->getColor();
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $duvel->getbeerInfo();