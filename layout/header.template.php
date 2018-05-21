<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Titlu</title>
<meta name="description" content="Descriere">
<meta name="author" content="Andrei">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button> <a class="navbar-brand" href="index.php">Test Page</a>
    </div>

<?php if ($user->is_logged_in()) { ?>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a> Hello <?php if ($user->is_logged_in()) echo $_SESSION['user_info']['name_first']; ?> - Balance <?php if ($user->is_logged_in()) echo $_SESSION['user_deposit']['total']; ?> EUR</a>
            </li>
            <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<strong class="caret"> </strong></a>
                <ul class="dropdown-menu">
                    <li>
                        <a data-toggle="modal" data-target="#editProfile" href="#">Edit Profile</a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="logout.php">Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    
<? } else { ?>    
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="login.php">Log In</a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

<?php } ?>  

</nav>


