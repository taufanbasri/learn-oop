<?php

namespace PCode;

interface RespondsToUserRegistration
{
    public function userRegisteredSuccessfully();
    
    public function userRegisteredFailed();
}