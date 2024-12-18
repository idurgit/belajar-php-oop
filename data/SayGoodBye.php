<?php

namespace Data\Trait;

trait SayGoodBye
{
    function sayGoodBye(?string $name)
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run();
}

class ParentPerson
{
    public function goodBye(?string $name)
    {
        echo "Good Bye in Person" . PHP_EOL;
    }

    public function hello(?string $name)
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

trait All
{
    use SayGoodBye, SayHello, HasName, CanRun {
        // bisa di override
        // hello as private;
        // goodBye as private;
    }
}

class Person extends ParentPerson
{
    use All;

    public function run()
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}
