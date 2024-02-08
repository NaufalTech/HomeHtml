<?php

    // $db_server = "localhost";
    // $db_user = "root";
    // $db_pass = "SandiSaya12345";
    // $db_name = "comment";
    // $conn = "";

    // $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
// $conn = new mysqli("root", "localhost", "", "comment_table");

// if($conn){
//     e
// }

    // if($conn){
    //     echo"you are connected";
    // }else{
    //     echo"your are'nt connected";
    // }

    $servername = "localhost";
$username = "root";
$password = "";
$database = "comment_DB";

// Create connection
// $conn = new mysqli($servername, $username, $password);
$db = mysqli_connect( $servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>