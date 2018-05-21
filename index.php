<?php
require  __DIR__ . "/config.php";

//process editProfile form if submitted
if (isset($_POST['editProfile'])){
    unset($_POST['editProfile']);    
    $user_data = $_POST; 
    $result = $user->setUserDetails($_SESSION['user_token'], $user_data);
    $_SESSION['user_token']   = $result['token'];
    $_SESSION['user_info']    = $result['user'];
    $_SESSION['user_deposit'] = $result['deposit'];
}

// include header, menu area
include  __DIR__ . "/layout/header.template.php";

// switch template for index page
if ($user->is_logged_in())
    include  __DIR__ . "/layout/index.user.template.php";
else
    include  __DIR__ . "/layout/index.template.php";

// include footer area
include  __DIR__ . "/layout/footer.template.php";
?>
