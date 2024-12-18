<?php

class Manager
{
    var string $name;

    var string $title;

    function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name)
    {
        echo "Hello $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }
    function sayHello(string $name)
    {
        echo "Hello $name, my name is Vice President $this->name" . PHP_EOL;
    }
}
