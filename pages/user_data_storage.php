<?php
session_start();
$user_list = [
    ['login' => 'Kate', 'password' => password_hash(123,PASSWORD_DEFAULT)], 
    ['login' => 'Andrew', 'password' => password_hash(123,PASSWORD_DEFAULT)], 
    ['login' => 'Natali', 'password' => password_hash(123,PASSWORD_DEFAULT)], 
    ['login' => 'Alla', 'password' => password_hash(123,PASSWORD_DEFAULT)],
    ['login' => 'George', 'password' => password_hash(123,PASSWORD_DEFAULT)],
];
?>