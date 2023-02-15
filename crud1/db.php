<?php
$servername = "db1";
$username = "capp1";
$password = "password";
$dbname = "capp1";
// creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check the connnection
if($conn->connect_errno){
    die("connection faild:".$conn->connect_errno);
}
 ?>