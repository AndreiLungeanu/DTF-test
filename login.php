<?php
require  __DIR__ . "/config.php";

//process login form if submitted
if (isset($_POST['login'])){
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$password = $_POST['password'];
	$result = $user->login($email, $password);
    
    switch ($result['status']) {
        case "200":
            $_SESSION['logged_in']    = true;
            $_SESSION['user_token']   = $result['token'];
            $_SESSION['user_info']    = $result['user'];
            $_SESSION['user_deposit'] = $result['deposit'];
            break;
        case "401":
            $errors[] = "User not found or wrong password";
            break;
        case "402":
            $errors[] = "User crated via facebook registration, but no password set";
            break;
        case "403":
            $errors[] = "User inactive";
            break; 
        case "404":
            $errors[] = "User blocked";
            break;                  
        default:
            $errors[] = "An error occured, please try again later.";
    }    
}

// redirect to index.php if already logged in
if ($user->is_logged_in()) {
    header('Location: index.php');
    exit;     
}

include  __DIR__ . "/layout/header.template.php";
include  __DIR__ . "/layout/error.template.php";
include  __DIR__ . "/layout/login.template.php";
include  __DIR__ . "/layout/footer.template.php";
?>
