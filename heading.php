<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PHP Sessions </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark teal darken-2 fixed-top scrolling-navbar">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Huge Website</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="session_page1.php">First Page
                </a>
            </li>
        </ul>
        <!-- Links -->

        <form class="form-inline">
            <ul class="navbar-nav mr-auto">
                <?php 
                if(isset($_SESSION['user'])){
                    echo '<span class="navbar-text white-text">
                    Welcome, <span>'. $_SESSION['user'] .'</span>
                    </span>';
                }
                else {
                    echo '<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>';
                }
                ?>

                <?php 
                if(isset($_SESSION['user'])){
                    echo '<li class="nav-item"><a class="nav-link" href="session_logout.php">Logout</a></li>';
                }
                else {
                    echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>';
                }



                ?>
                
            </ul>
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->