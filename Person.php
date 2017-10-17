<?php

class Person
{
    public $name;

    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age < 15) {
            throw new Exception("Person is not old enough");
            
        }
        $this->age = $age;
    }
}

$taufan = new Person('Taufan Prasetyo');

$taufan->setAge(25);

var_dump($taufan);