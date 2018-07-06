<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "de_recipe" ;

// Create connection
$conn = mysqli_connect($servername, $username, $password) or die("Connection failed: " . mysql_connect());

// Check connection
/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}*/

mysqli_select_db($conn,$db);

?>