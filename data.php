<?php

use PCode\Business;
use PCode\Users\Person;
use PCode\Staff;

$taufan = new Person('Taufan Prasetyo');

$staff = new Staff([$taufan]);

$itcompany = new Business($staff);

$itcompany->hire(new Person('Evita Karlina'));

var_dump($itcompany->getStaffMembers());