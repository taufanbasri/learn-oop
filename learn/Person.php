<?php

class Person
{
    private $name;

    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age * 365;
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

var_dump($taufan->getAge());