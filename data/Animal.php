<?php 

namespace Data;

require_once "Food.php";

abstract class Animal
{
    public string $name;

    abstract public function run();

    abstract public function eat(AnimalFood $animalFood);
}

class Cat extends Animal
{
    public function run()
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood)
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run()
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(animalFood $animalFood)
    {
        echo "Dog is eating" . PHP_EOL;
    }
}