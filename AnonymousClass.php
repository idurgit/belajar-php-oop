<?php

interface HelloWorld
{
    public function sayHello();
}

// class SampleHelloWorld implements HelloWorld {
//     public function sayHello() {
//         echo "Hello World" . PHP_EOL;
//     }
// }

// $helloWorld = new SampleHelloWorld();

$helloWorld = new class("Eko") implements HelloWorld {

    public string $name;

    public function __construct(string  $name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();
