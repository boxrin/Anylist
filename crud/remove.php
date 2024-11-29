<?php
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = mysqli_connect($servename, $username, $password, $dbname);


$sql = "delete from clients where ID = $_GET[ID]";
mysqli_query($conn, $sql);
header("Location: /crud/clients.php");
?>