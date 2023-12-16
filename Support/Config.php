<?php

define("BASE_URL", "http://localhost/gabriel/studenem/");
define("TEMPLATE", "index");
define("TEMPLATE_ADMIN", "admin");


$host = "localhost";
$db_name = "studenem";
$user = "root";
$pass = "";

try {
    $db = new PDO("mysql: host=$host;dbname=$db_name", $user, $pass);
    // echo"OKK";
    
} catch (PDOException $e) {
    die("Error " . $e->getMessage());
}

