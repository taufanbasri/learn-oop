<?php

namespace PCode;

class AuthController implements RespondsToUserRegistration
{
    // with method injection
    // public function register(RegisterUser $registration)
    // {
    //     $registration->execute();
    // }

    // with construct injection
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
