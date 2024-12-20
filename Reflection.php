<?php 

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "eko"; 
$request->password = "rhs";

ValidationUtil::validateReflection($request);

class RegisterUserRequest      
{
    public ?string $name;
    public ?string $email;
    public ?string $password;
}

$register = new RegisterUserRequest();

ValidationUtil::validateReflection($register);