<?php

namespace App;

class Student implements StudentInterface, SportmanInterfaceInterface
{
    public string $name;
    protected int $age;
    public array $marks;

    public function __construct(string $name, int $age = 17, array $marks = [])
    {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
    }

    public function study() : void
    {
        print("Я $this->name, мне $this->age, я учусь в МИДиС");
    }

    public function addMark(int $mark) : self
    {
        $this->marks[] = $mark;
        return $this;
    }
    public function avgMarks() : float
    {
        return array_sum($this->marks) / count($this->marks);
    }


    public function getAge() : int
    {
        return $this-> age;
    }

    public function setAge(int $age) : void
    {
        if($age > 16 &&  $age < 99){
            $this->age = $age;
        }
    }

    public function breathe()
    {
        print("Я тут <br>");
    }

        public function takeExam()
    {
        print($this->avgMarks());
    }

    public function doExercise()
    {
        print("Я занимаюсь спортом");
    }
}
