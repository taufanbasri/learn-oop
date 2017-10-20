<?php

namespace PCode;

class AuthController
{
    // with injection method
    // public function register(RegisterUser $registration)
    // {
    //     $registration->execute();
    // }

    // with construct method
    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }

    public function register()
    {
        $this->registration->execute([], $this);
    }

    public function userRegisteredSuccessfully()
    {
        var_dump('created successfully, redirect after register');
    }

    public function userRegisteredFailed()
    {
        var_dump('created unsuccessfully, redirect back');
    }
}
