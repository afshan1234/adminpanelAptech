<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('error_reporting', E_ALL);

session_start();

session_unset();

header("location:loginpage.php");
