<?php

namespace PCode;

class RegisterUser
{
    public function execute(array $data, $listener)
    {
        var_dump('Registering the user.');

        $listener->userRegisteredFailed();
    }
}
