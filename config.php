<?php
session_start();

$api_host = "https://api.softlotto.com";
$api_token = "u5QX2ADnmf2";
$api_prefix = "/api";

// apiClient class
require  __DIR__ . "/include/api.class.php";

// User class
require  __DIR__ . "/include/user.class.php";

$user = new User($api_host, $api_token, $api_prefix);

// store errors
$errors = array();
?>
