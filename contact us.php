<?php

$conn=mysqli_connect("localhost","root","","naan-visitorrecord");

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];

    $sql="insert into contactus(FirstName, LastName, EmailID, Feedback) values('$fname','$lname','$email','$feedback')";

    $result=mysqli_query($conn,$sql);

    echo "<script>alert('Thank you for filling details. We will response you very soon.');</script>";

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visitor Management System</title>

    <!--Font Awesome 5 Icons-->
    <link href="fontawesome-5/fontawesome/css/all.min.css" rel="stylesheet">

    <!--Bootstrap CSS-->
    <link href="bootstrap-4/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--Bootstrap Jquery, Popper and JavaScript-->
    <script src="bootstrap-4/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap-4/bootstrap/js/popper.min.js"></script>
    <script src="bootstrap-4/bootstrap/js/bootstrap.min.js"></script>

    <style type="text/css">

    #tab{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 25px;
        letter-spacing: 2px;
        color: white;
        text-transform: uppercase;
        margin-left: 30px;
        font-weight: bold;
    }

    #tab:hover{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 25px;
        letter-spacing: 3px;
        color: yellow;
        text-transform: uppercase;
        margin-left: 30px;
        font-weight: bold;
    }


    </style>

</head>

<body>  

<div class="container-fluid">
<br>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
        <p class="text-center font-weight-bold text-primary text-uppercase" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 30px; letter-spacing: 2px;">
            <i class="fas fa-building"></i>
                visitor pass management system - a web application
            <i class="fas fa-desktop"></i>
            </p>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-md bg-primary navbar-light">
    <a href="#" class="navbar-brand font-weight-bold text-light text-uppercase" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px; letter-spacing: 2px;">
    <i class="fas fa-building"></i>
    visitor pass management system
    <i class="fas fa-building"></i>
    </a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#demo">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="demo">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="index.php" class="nav-link" id="tab">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a href="login.php" class="nav-link" id="tab">
                   Login
                </a>
            </li>

            <li class="nav-item">
                <a href="about us.php" class="nav-link" id="tab">
                    About Us
                </a>
            </li>

            <li class="nav-item">
                <a href="contact us.php" class="nav-link" id="tab">
                   Contact Us
                </a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="row">
    <div class="col-md-8">
        <div class="d-flex justify-content-center">
<div class="card" style="width: 500px; margin-left: 400px; border: 1px solid rgb(9, 148, 228);">
    <div class="card-header bg-primary text-center text-light font-weight-bold text-uppercase " style="font-family: Arial, Helvetica, sans-serif; font-size: 25px; letter-spacing: 2px;">
    contact us
    </div>
    <div class="card-body">
    <form action="" method="POST">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="fname" id="fname" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lname" id="lname" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Feedback</label>
                                <textarea name="feedback" id="feedback" class="form-control" rows="4" required></textarea>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" name="submit" id="submit" class="btn btn-outline-primary">
                                    <i class="fas fa-pen-square"></i>
                                    Submit
                                </button>
                            </div>
                        </form>
    </div>
</div>
        </div>
</div>

</div>
<br>
<div class="row bg-primary">
    <div class="col-md-12">
        <div class="alert">
            <br>
        <p class="text-center font-weight-bold font-italic text-light" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px; letter-spacing: 4px;">
            &copy; Designed and Developed by Mohammed naan
        </p>
        </div>
    </div>
</div>
</div>
</body>
</html>