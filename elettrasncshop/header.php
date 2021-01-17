<?php
  // First we start a session which allow for us to store information as SESSION variables.
  session_start();
  // "require" creates an error message and stops the script. "include" creates an error and continues the script.
  require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Sign Up</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">


</head>

<body>


    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="items.php">Items</a></li>
                        <li class="nav-item "><a class="nav-link" href="suppliers.php">Suppliers</a></li>
                        <li class="nav-item"><a class="nav-link" href="customers.php">Customers</a></li>
                        <li class="nav-item"><a class="nav-link" href="warehouses.php">Warehouses</a></li>
                        <li class="nav-item"><a class="nav-link" href="countries.php">Countries</a></li>
                        <li class="nav-item"><a class="nav-link" href="cities.php">Cities</a></li>
                        <li class="nav-item"><a class="nav-link" href="categories.php">Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="employees.php">Employees</a></li> 
                </ul>
                
                <div class="header-login">
        <!--
        Here is the HTML login form.
        Notice that the "method" is set to "post" because the data we send is sensitive data.
        The "inputs" I decided to have in the form include username/e-mail and password. The user will be able to choose whether to login using e-mail or username.

        Also notice that using PHP, we can choose whether or not to show the login/signup form, or to show the logout form, if we are logged in or not. We do this based on SESSION variables which I explain in more detail in the login.inc.php file!
        -->
                    <?php
                        if (!isset($_SESSION['id'])) {
                        echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="E-mail/Username">
                            <input type="password" name="pwd" placeholder="Password">
                            <button type="submit" name="login-submit">Login</button>
                        </form>
                        <a href="signup.php" class="header-signup">Signup</a>';
                        }
                        else if (isset($_SESSION['id'])) {
                        echo '<form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="login-submit">Logout</button>
                        </form>';
                        }
                        ?>
                    </div>
                </div>
                <!-- /.navbar-collapse -->

                
            </div>
            
        </nav>
        
        
    </header>