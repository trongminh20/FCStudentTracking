<?php


$form = new Form();
$inputAttribute = [
    ["name" => "username", "type" => "text", 'placeholder' => 'Enter username'], // input 1
    ["name" => "password", "type" => "password", 'placeholder' => 'Enter password'], // input 2
    ["name" => 'submit', 'type' => 'submit', 'value' => 'LOGIN'] //input 3
];
$form::start_form("form", "loginform", "action", "POST");
$form::add_input($inputAttribute);
$form::end_form();

