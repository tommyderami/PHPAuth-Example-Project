<?php

require_once 'vendor/autoload.php';

use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuth;

$dbh = new PDO("mysql:host=localhost;dbname=phpauth-ex", "root", "mysql");

$config = new PHPAuthConfig($dbh);
$auth = new PHPAuth($dbh, $config);

$mode = $_POST['mode'];
$email = $_POST['email'];
$password = $_POST['password'];
echo $action . ' ' . $email . ' ' . $password;
switch($mode){
    case 1: //login
        $loginResult = $auth->login($email, $password);
        echo $loginResult;
        break;
    case 2: //new user signup
        $signupResult = $auth->register($email, $password, $password);
        echo $signupResult;
}

?>