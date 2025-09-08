<?php
require_once("../vendor/autoload.php");

use App\Student;
use App\Tutor;

$student1 = new Student("Oleg", 18, [5,3,4]);
print($student1->name . "<br>");
$student1->setAge(22);
print($student1->getAge() . "<br>");
$student1->study(); 
print_r($student1->marks);

$student1->addMark(5)->addMark(2)->addMark(2);
print("<br>");
print_r($student1->marks);
print("<br>");
print($student1->avgMarks());

$tutor = new Tutor("Олег",20,[5,5], "П-12");
print("<br>");
print($tutor->name);
$tutor->study();

print("<br>");
$tutor->live();