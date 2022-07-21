<?php

declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* EXERCISE 5
Copy the class of exercise 1.
TODO: Change the properties to private.
TODO: Fix the errors by using getter and setter functions.
TODO: Change the price of the cola to 3.5 euro (this is the inflation) and print it also on the screen on a new line.
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
    public function getPrice()
    {
        return $this->price;
    }
    public function getTemperature()
    {
        return $this->temperature;
    }
    public function setPrice(float $price): float
    {
        return $this->price = $price;
    }
}


$cola = new Beverage("black", 2);

echo $cola->getInfo();
echo "<br>";
echo $cola->getTemperature();
echo "<br>";
$cola->setPrice(3.5);
echo $cola->getPrice();