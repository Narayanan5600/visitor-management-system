<?php

session_start();

$conn=mysqli_connect("localhost","root","","naan-visitorrecord");

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];

    $_SESSION['name']=$name;

    $sql="select * from adminlogin where AdminName='".$_SESSION['name']."' and Password='$password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            echo "<script>alert('Login successful.');</script>";
            echo "<script>window.location.href='dashboard.php';</script>";  
        }
    }

    else
    {
        echo "<script>alert('Invalid username and password.');</script>";
    }
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

    </style>

</head>

<body>  

<div class="container-fluid">

<div class="row bg-primary">
    <div class="col-md-12">
        <div class="alert">
            <br>
           <p class="text-center text-light text-uppercase font-weight-bold" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 35px; letter-spacing: 2px;">
                        <i class="fas fa-building"></i>
                        visitor pass management system
                        <i class="fas fa-building"></i>
           </p>
        </div>
    </div>
</div>

<br>

<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            <div class="card" style="border: 1px solid rgb(9, 148, 228); width: 400px;">
                <div class="card-header text-light text-center font-weight-bold bg-primary text-uppercase" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px; letter-spacing: 2px;">
                    <i class="fas fa-user"></i>
                    admin login
                </div>
                <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label>Admin Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <div class="d-flex justify-content-center">
                    <input type="submit" name="submit" id="submit" class="btn btn-outline-primary" value="LOGIN">
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
           <p class="text-center text-light font-italic font-weight-bold" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px; letter-spacing: 3px;">
                        &copy; Designed and Developed by Narayanan
           </p>
        </div>
    </div>
</div>

</div>



</body>
</html>