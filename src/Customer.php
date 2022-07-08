<?php

namespace rizkidardev\Belajar;

class Customer {
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(string $name = "Guest") : string
    {
        return "Hello $name , my name is $this->name";
    }
}