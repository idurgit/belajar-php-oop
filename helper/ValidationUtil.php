<?php 

class ValidationUtil {
    static function validate(LoginRequest $request) {
        if (!isset($request->username)) {
            throw new ValidationException("Username is null");
        } else if (!isset($request->password)) { 
            throw new ValidationException("Password is null");
        }
    } 

    
}