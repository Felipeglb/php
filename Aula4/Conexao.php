
<?php
$host = "localhost";
$db = "T13_CRUD";
$userCon = "root";
$passCon = "";

try {
    $conn = new PDO("mysql:dbname=$db;host=$host", $userCon, $passCon);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");

}
catch (PDOException $e)
{
    echo 'Error: ' . $e->getMessage();
}

?>