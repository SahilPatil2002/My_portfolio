<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed due to ".mysqli_connect_error());
}
else{
    // echo "Connection successful";
}

?>