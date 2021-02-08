<?php
$_SESSION['database'] = $database->print_out();

$_SESSION['controller'] = $controller -> print_out();

$admin = new Admin('minhphan','trongminh20','trongminh@gmail.com','999','dfgfgf');

$_SESSION['admin'] = $admin ->print_out();


header("Location:?action=v_home");
