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

    #slide{
        animation-name: slideshow;
        animation-duration: 5s;
        animation-iteration-count: infinite;
    }

    @keyframes slideshow{
        from{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 30px; 
            letter-spacing: 1px;
            font-weight: bold;
            color: white;
            text-align: center;
            text-transform: uppercase;
        }
        to{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 30px; 
            letter-spacing: 4px;
            font-weight: bold;
            color: white;
            text-align: center;
            text-transform: uppercase;
        }
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

<nav class="navbar navbar-expand-md  navbar-light">
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
                <a href="#" class="nav-link" id="tab">
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

<div class="alert bg-primary">

<p id="slide"> <i class="fas fa-building"></i>visitor pass management system <i class="fas fa-building"></i></p>

<div id="demo" class="carousel slide" data-ride="carousel">

<ul class="carousel-indicators">
<li data-target="#demo" data-slide-to="0" class="active"></li>
<li data-target="#demo" data-slide-to="1"></li>
<li data-target="#demo" data-slide-to="2"></li>
<li data-target="#demo" data-slide-to="3"></li>
</ul>

<div class="carousel-inner">
<div class="carousel-item active">
    <img src="images/v4.jpg" class="mx-auto d-block" style="height: 300px; width: 600px;">
</div>

<div class="carousel-item">
        <img src="images/v2.jpg" class="mx-auto d-block" style="height: 300px; width: 600px;">
    </div>

    <div class="carousel-item">
            <img src="images/v1.jpg" class="mx-auto d-block" style="height: 300px; width: 600px;">
        </div>

        <div class="carousel-item">
            <img src="images/v3.jpg" class="mx-auto d-block" style="height: 300px; width: 600px;">
        </div>
</div>

<a href="#demo" class="carousel-control-prev" data-slide="prev">
<span class="carousel-control-prev-icon"></span>
</a>

<a href="#demo" class="carousel-control-next" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>   

</div>
<br>
<p id="slide">a web application</p>
</div>
<br>

<div class="row">
    <div class="col-md-8">
<div class="card">
    <div class="card-header bg-primary text-light font-weight-bold text-uppercase" style="font-family: Arial, Helvetica, sans-serif; font-size: 25px; letter-spacing: 2px;">
    visitor pass management system
    </div>
    <div class="card-body">
    Visitor management refers to tracking the usage of a public building or site. By gathering increasing amounts of information, avisitor management system can record the usage of the facilities by specific visitors and provide documentation of visitors whereabouts.
    <br><br>
    Visitor Management system provides a way to effectively control, record & track your organization's visitor traffic. It helps to prevent the entry of any unauthorized or unwanted person in the premises. 
    Basic computer or electronic visitor management systems use a computer network to monitor and record visitor information.
    An electronic visitor management system improves upon most of the negative points of a pen and paper system.
    <br><br>
    Visitors play a key role in education, finance, manufacturing and other industries, and are a key part of sustained success in many fields.

    Visitor Management refers to the practice of welcoming, processing and monitoring guests at worksites or other facilities. Visitor Management systems refer to the tools used to perform this practice and range from basic, like log books, to more advanced software systems that can be integrated with options like surveillance cameras, biometric scanners and lists of unwelcome guests.
    <br><br>
    Creating a workplace environment where your employees feel safe is of the utmost importance. Feelings of safety and comfort are key to overall productivity and success. Your employees will feel more comfortable knowing that any strangers or guests on-site have been processed through a Visitor Management system and screened accordingly.

At their most basic level, Visitor Management systems perform the important task of tracking who is on your premises. More advanced Visitor Management systems can track when guests arrive, limit where they are allowed to go, control the length of their stay and even screen them against publicly available background data. Simply put, Visitor Management systems give you maximum control over the guests accessing your facilities, a key aspect to keeping those facilities safe and secure.
    </div>
</div>
</div>

<div class="col-md-4">
<br><br><br><br><br><br>
    <img src="images/v4.jpg" class="rounded" style="height: 300px; width: 430px;">
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