<?php

namespace Data;

require_once 'Animal.php';

interface AnimalShelter
{
    function adopt(string $name);
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name) {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name) {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
