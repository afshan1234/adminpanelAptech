<?php
session_start();



error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL);

$host = 'localhost'; // or your host IP address
$user = 'root'; // your MySQL username
$password = 'Root@1234'; // your MySQL password
$database = 'logInSession'; // your MySQL database name
$conn =  mysqli_connect($host, $user, $password, $database);

$username = $_POST['uname'];
$password = $_POST['password'];

$query = mysqli_query($conn, "select count(*) from login where 
userName = '" . $username . "' and password = '" . $password . "' ");

$result = mysqli_fetch_array($query);

if ($result[0] > 0) {

  header("location: /Modernize-1.0.0/src/html/index.html");
} else {
  echo 'not login';
}
mysqli_close($conn);
