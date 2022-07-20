<?php

declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* EXERCISE 3
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;

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
    public function setColor($color)
    {
        return $this->color = $color;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getTemperature()
    {
        return $this->temperature;
    }
}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;
    public function __construct($color, $price,$name , $alcoholPercentage, $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
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
    private function beerInfo()
    {
        return "Hi i'm {$this->getName()} and have an alcochol percentage of {$this->getAlcoholPercentage()} and I have a {$this->getColor()} color.";
    }
    public function getBeerInfo()
    {
        return $this->beerInfo();
    }
}

$Duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo $Duvel->getName();
echo $Duvel->getColor();
echo $Duvel->getAlcoholPercentage();
echo $Duvel->getPrice();
echo $Duvel->getTemperature();
echo "<br>";
echo $Duvel->setColor("light");
echo "<br>";
echo $Duvel->getBeerInfo($Duvel);