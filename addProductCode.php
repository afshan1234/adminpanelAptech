<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL);

//include 'addProductTable.php';

$conn = mysqli_connect('localhost', 'root', 'Root@1234', 'logInSession');

if (!$conn) {
    die("Not Connected" . mysqli_connect_error());
}

$addProd = $_POST['addProd'];
$prodDesc = $_POST['addDesc'];
$prodPrice = $_POST['prodPrice'];
//$prodPrice= $_POST[''];

$query = "insert into AddProduct values
( '" . $addProd . "' , '" . $prodDesc . "' ,'" . $prodPrice . "' ,'" . $prodPrice . "' )";


if (mysqli_query($conn, $query)) {
    header("location:addProductTable.php");
    //    echo "value inserted";
} else {
    echo "value not inserted";
}
