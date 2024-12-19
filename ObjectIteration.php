<?php

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $fourth = "Fourth";

    // public function getIterator(): Traversable
    // {
    //     $array = [
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "fourth" => $this->fourth,
    //     ];

    //     return new ArrayIterator($array);
    // }

    public function getIterator(): Traversable
    {

        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fourth" => $this->fourth;
    }
}

$data = new Data();

foreach ($data as $key => $value) {
    echo "$key => $value" . PHP_EOL;
}
