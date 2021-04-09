<?php
$data = array();
$raw = $_POST;
foreach ($_POST as $op) {
    array_push($data, filter_input(INPUT_POST, $op, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
}

print_r($data);

print_r($raw);