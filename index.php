<?php
session_start();

include "libs.php";

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'v_login';
}

//getting const information
$conf = require "src/config.php";

//init information of DB hosting
$dbConnect = "mysql:host=". $conf['DATABASE']['db_host'] . ";dbname=" . $conf['DATABASE']['db_name'] . ";charset=" .
    $conf['DATABASE']['db_charset'];
$dbUsername = $conf['DATABASE']['db_username'];

$dbPassword = $conf['DATABASE']['db_password'];
$pdo = new PDO($dbConnect, $dbUsername, $dbPassword, $conf['DATABASE']['db_options']);

//connect to Database
$database = new Database($pdo);

//new Model to work with logic
$model = new Model($database);
// new Controller for redirecting files
$controller = new Controller();
// new View for generating some specific view
$view = new View();


//Routing to destination page
require $controller->index($action, $model);