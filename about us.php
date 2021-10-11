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
<div class="card">
    <div class="card-header bg-primary text-light font-weight-bold text-uppercase" style="font-family: Arial, Helvetica, sans-serif;
    font-size: 25px; letter-spacing: 2px;">
    about us
    </div>
    <div class="card-body" style="text-indent: 20px;">
    Visitor Management system provides a way to effectively control, record & track your organization's visitor traffic. It helps to prevent the entry of any unauthorized or unwanted person in the premises. 
    Basic computer or electronic visitor management systems use a computer network to monitor and record visitor information.
    <br><br>
    An electronic visitor management system improves upon most of the negative points of a pen and paper system.
    The main aim for developing this project is to manage entry and exit of ouside visitors. This system main purpose is to secure company from outside visitors.
    <br><br>
    The main objective for developing this module is to provide all the functionality related to visitor. It tracks all the information and details of the visitor. We have developed all type of CRUD (Create, Read, Update, Delete) operations of the visitor. 
    This is a role based module where admin can perform each and every operations on data.
    <br><br>
    </div>
</div>
</div>

<div class="col-md-4">
    <img src="images/v4.jpg" class="rounded" style="height: 300px; width: 350px; margin-top: 50px;">
</div>

</div>

<div class="row bg-primary">
    <div class="col-md-12">
        <div class="alert">
            <br>
        <p class="text-center font-weight-bold font-italic text-light" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px; letter-spacing: 4px;">
            &copy; Designed and Developed by Narayanan
        </p>
        </div>
    </div>
</div>
</div>
</body>
</html>