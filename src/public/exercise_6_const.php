<?php

declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* EXERCISE 6
Copy the classes of exercise 2.
TODO: Change the properties to private.
TODO: Make a const BARNAME with the value 'The Trooper'.
TODO: Print the constant on the screen.
TODO: Create a function in Beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.
Use typehinting everywhere!
*/

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;
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