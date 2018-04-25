<?php
//$servername = "mackenziedb.ch3mgzgtmzdm.sa-east-1.rds.amazonaws.com";
//$username = "montini";
//$password = "St4rW4rs";
//$dbname = "mackbussola";

//LOCAL
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "mackbussola";

//AWS S3
//$servername = "mackenziedb.ch3mgzgtmzdm.sa-east-1.rds.amazonaws.com";
//$username = "montini";
//$password = "St4rW4rs";
//$dbname = "mackbussola";

//AWS Elastic Beanstalk
//$servername = "aa1xb2iibnygn8.ch3mgzgtmzdm.sa-east-1.rds.amazonaws.com";
//$username = "montini";
//$password = "St4rW4rs";
//$dbname = "ebdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>