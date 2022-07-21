<?php

declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* EXERCISE 7
Copy your solution from exercise 6
TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Rue Bruce Dickinson 9, 4000 Liège".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.
Use typehinting everywhere!
*/

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;
    public static string $address = "Rue Bruce Dickinson 9, 4000 Liège";
    const BARNAME = "The Trooper";

    public function __construct($color, $price, $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // The functions
    public function getInfo(): string
    {
        return "This beverage is {$this->getTemperature()} and {$this->getColor()}.";
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function getBarname(): string
    {
        return self::BARNAME;
    }

    public function getAddress(): string
    {
        return self::$address;
    }

}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct($color, $price, $name, $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function findBarname(): string
    {
        return self::BARNAME;
    }
}

$cola = new Beverage("black", 2);

print_r($cola->getInfo());
echo "<br>";
print_r($cola->getTemperature());
echo "<br>";
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

print_r($duvel->getAlcoholPercentage());
echo "<br>";
echo $duvel->getAlcoholPercentage();
echo "<br>";
echo $duvel->getColor();
echo "<br>";
echo $duvel->getInfo();
echo "<br>";
echo $cola->getBarname();
echo "<br>";
echo $duvel->findBarname();
echo "<br>";
echo Beverage::$address;
echo "<br>";
echo $cola->getAddress();


