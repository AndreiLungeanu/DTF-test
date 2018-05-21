<?php
require  __DIR__ . "/config.php";

//process register form if submitted
if (isset($_POST['register'])){
    
    $req = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    
    if (!$user->isValidEmail($req['email']))
        $errors[] = "Email is not correct.";
    
    if (!$user->isValidPassword($req['password']))
        $errors[] = "Password is too simple.";
    
    if ($req['password'] != $req['confirm_password'])
        $errors[] = "Password confirmation doesn't match.";
    
    if (empty($errors)) {
        $result = $user->register($req);
    
        switch ($result['status']) {
            case "200":
                header('Location: login.php');
                exit;                 
                break;
            case "403":
                $errors[] = "Site not specified or invalid token";
                break;
            case "412":
                $errors[] = "Unable to validate POST-Data";
                break;
            case "501":
                $errors[] = "Error during registration";
                break;                
            default:
                $errors[] = "An error occured, please try again later.";
        }
    }        
}

include  __DIR__ . "/layout/header.template.php";
include  __DIR__ . "/layout/error.template.php";
include  __DIR__ . "/layout/register.template.php";
include  __DIR__ . "/layout/footer.template.php";
?>
