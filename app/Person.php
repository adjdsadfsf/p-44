<?php

namespace App;

abstract class Person
{
    public string $gender;

    public function live()
    {
        print("Я тут <br>");
    }

    abstract public function breathe();
}

