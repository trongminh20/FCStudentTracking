<?php
session_start();

include "libs.php";

if(isset($_POST['action'])){
    $action = $_POST['action'];
}else if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'v_login';
}
//getting const information
$conf = require "src/config.php";

//Coonect to database hosting
$dbConnect = "mysql:host=".$conf['db_host'].";dbname=".$conf['db_name'].";charset=".$conf['db_charset'];
$dbUsername = $conf['db_username'];
$dbPassword = $conf['db_password'];
$pdo = new PDO($dbConnect, $dbUsername, $dbPassword,$conf['db_options']);
$database = new Database($pdo);

//new ccontroller for control flow
$model = new Model($database);
$controller = new Controller($database);
//Routing to destination page
require $controller -> index($action);