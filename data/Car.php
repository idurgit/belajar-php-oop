<?php 

namespace Data;

interface HasBrand
{
    public function getBrand(): string;
}

interface IsMaintenance
{
    public function isMaintenance(): bool;
}

interface Car extends HasBrand
{
    function drive();

    function getTire(): int;
}

class Avanza implements Car, IsMaintenance
{
    public function drive()
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return true;
    }
}