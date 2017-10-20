<?php

$registration = new \PCode\RegisterUser;
$authController = new \PCode\AuthController($registration);

$authController->register();