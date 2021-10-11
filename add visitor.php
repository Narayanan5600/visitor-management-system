<?php

$conn=mysqli_connect("localhost","root","","naan-visitorrecord");

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $whom=$_POST['whom'];
    $department=$_POST['department'];
    $reason=$_POST['reason'];

    $sql="insert into visitorinfo(FullName, EmailID, PhoneNumber, Address, WhomToMeet, Department, ReasonToMeet) values('$name','$email','$phone','$address','$whom','$department','$reason')";

    $result=mysqli_query($conn,$sql);

    echo "<script>alert('Visitor data added successfully.');</script>";
    echo "<script>window.location.href='manage visitor.php';</script>";
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

    #header{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
        font-size: 35px; 
        letter-spacing: 2px;
    }

    #header:hover{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
        font-size: 35px; 
        letter-spacing: 2px;
        color: yellow;
        font-weight: bold;
    }
    
    .dropdown-item:hover{
        background-color: rgb(9, 148, 228);
        color: white;
        font-weight: bold;
    }

    #dashboard{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 22px;
        font-weight: bold;
        color: white;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    #subopt{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 20px;
        font-weight: bold;
        color: white;
        text-transform: uppercase;
        margin-left: 30px;
    }
    
    </style>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row bg-primary">
            <div class="col-md-8">
                <br>
                <div class="alert">
                    <a href="#" class="nav-link text-light text-uppercase font-weight-bold" id="header">
                        <i class="fas fa-building"></i>
                        visitor pass management system
                        <i class="fas fa-building"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="alert">
                <br>
                <div class="d-flex justify-content-end">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle text-light font-weight-bold" data-toggle="dropdown" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 30px; letter-spacing: 2px;">
                        <i class="fas fa-user-circle"></i>
                        Account
                    </button>

                    <div class="dropdown-menu">
                        <a href="my profile.php" class="dropdown-item">
                            <i class="fas fa-user"></i>
                            My Profile
                        </a>

                        <div class="dropdown-divider"></div>

                        <a href="change password.php" class="dropdown-item">
                            <i class="fas fa-key"></i>
                            Change Password
                        </a>

                        <div class="dropdown-divider"></div>

                        <a href="login.php" class="dropdown-item">
                            <i class="fas fa-lock"></i>
                            Logout
                        </a>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 bg-primary">
                <p class="text-center text-light font-weight-bold text-uppercase" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px; letter-spacing: 2px; border: 2px solid white; padding: 10px;">
                    <i class="fas fa-user"></i>
                    admin panel
                </p>
                <br>

                <a href="dashboard.php" class="nav-link" id="dashboard">
                    <i class="fas fa-desktop"></i>
                    dashboard
                </a>

                <a href="#" class="nav-link" id="dashboard">
                    <i class="fas fa-user"></i>
                    vistor
                </a>

                <a href="add visitor.php" class="nav-link" id="subopt">
                    <i class="fas fa-pen-square"></i>
                    add visitor
                </a>

                <a href="manage visitor.php" class="nav-link" id="subopt">
                    <i class="fas fa-pen-square"></i>
                    manage visitor
                </a>

                <a href="search visitor.php" class="nav-link" id="dashboard">
                    <i class="fas fa-search"></i>
                    search visitor
                </a>

                <a href="visitor between dates.php" class="nav-link" id="dashboard">
                    <i class="fas fa-calendar"></i>
                    visitor between dates
                </a>
                <br>

                <p class="text-center text-light font-weight-bold font-italic" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 18px; letter-spacing: 3px;">
                    &copy; Designed and Developed by  Narayanan
                </p>

                <br>
            </div>

            <div class="col-md-9">
                <div class="alert">
                    <p class="font-weight-bold text-uppercase" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px; letter-spacing: 2px;">
                        welcome admin
                    </p>
                    <hr>

                    <div class="card">
                        <div class="card-header text-light bg-primary font-weight-bold">
                            <i class="fas fa-user"></i>
                                Add Visitor
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" id="phone" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" id="address" class="form-control" rows="4" required></textarea>
                                </div>

                                <div class="form-group">
                                <label>Whom to meet</label>
                                <input type="text" name="whom" id="whom" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Department</label>
                                <input type="text" name="department" id="department" class="form-control" required>
                                </div>

                                <div class="form-group">
                                <label>Reason to meet</label>
                                <input type="text" name="reason" id="reason" class="form-control" required>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" name="submit" id="submit" class="btn btn-outline-primary">
                                        <i class="fas fa-user"></i>
                                        Add Visitor
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>