<?php

$servername = "";
$username = "";
$password = "";
$dbname = "test_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO test_db1 (item1, item2)
    VALUES ('$_POST[item1]', '$_POST[item2]')";
    $conn->exec($sql);
    echo "New Record Sucess";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
