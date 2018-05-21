<?php require('config.php');

// remove sessions
$user->logout(); 

//return to login page
header('Location: login.php');
exit;
?>