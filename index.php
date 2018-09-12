<?PHP
require_once 'vendor/autoload.php';

use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuth;

$dbh = new PDO("mysql:host=localhost;dbname=phpauth-ex", "root", "mysql");

$config = new PHPAuthConfig($dbh);
$auth = new PHPAuth($dbh, $config);

if (!$auth->isLogged()) {
    header("Location:login.php");
    

    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/spectre.min.css">
    <title>Page requiring Login to View</title>
</head>
<body>
    <h1>You've successfully logged in if you are viewing this page.</h1>
</body>
</html>