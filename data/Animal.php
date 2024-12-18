<?php 

namespace Data;

abstract class Animal
{
    public string $name;

    abstract public function run();
}

class Cat extends Animal
{
    public function run()
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run()
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }
}