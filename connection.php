<?php
$username = "root";
$servername = "localhost";
$password = "";
$db="product_db";

$conn=mysqli_connect($servername, $username, $password, $db);

if($conn){
    echo "Connection Established  <br> ";

}
else{
    echo "Connection Not Established <br>";
    die("Connection Failed Because" .mysqli_connect_error()."<br>");
}