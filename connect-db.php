<?php
$servername = "localhost";
$username 	= "root";
$password 	= "";
$dbname 	= "ideaportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: <br>" . $conn->connect_error);
}
