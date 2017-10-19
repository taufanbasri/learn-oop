<?php

namespace PCode;

use PCode\Users\Person;

class Business
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        return $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStaffMembers()
    {
        return $this->staff->members();
    }
}