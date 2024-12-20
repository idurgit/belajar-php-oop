<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
// $loginRequest->username = "Eko";
// $loginRequest->password = "123";

$loginRequest = new LoginRequest();
$loginRequest->username = " ";
$loginRequest->password = " ";

// try {
//     validateLoginRequest($loginRequest);
// } catch (ValidationException $exception) {
//     echo "Validation Error : " . $exception->getMessage() . PHP_EOL;
// } catch (Exception $exception) {
//     echo "Error : " . $exception->getMessage() . PHP_EOL;
// }

try {
    validateLoginRequest($loginRequest);
    echo "Valid" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : " . $exception->getMessage() . PHP_EOL;

    var_dump($exception->getTrace());

    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "Finally, error atau tidak error, akan dieksekusi"  . PHP_EOL;
}


