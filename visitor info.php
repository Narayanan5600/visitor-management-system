<?php

$conn=mysqli_connect("localhost","root","","naan-visitorrecord");

if(isset($_POST['submit']))
{
    $search=$_POST['search'];

    $sql="select * from visitorinfo where FullName='$search' or PhoneNumber='$search'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        {

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

<div class="row">
    <div class="col-md-12">
        <a href="search visitor.php" class="nav-link text-danger font-weight-bold" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;">
        <i class="fas fa-arrow-left"></i>
        Back
        </a>
        <div class="d-flex justify-content-center">
            <div class="card" style="border: 1px solid rgb(9, 148, 228);">
                <div class="card-header font-weight-bold text-light text-center text-uppercase bg-primary" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 25px; letter-spacing: 2px;">
                <i class="fas fa-user"></i>
                Visitor Information
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="font-weight-bold text-danger">Full Name</td>
                                <td class="font-weight-bold text-danger">
                                    <?php
                                    echo $row['FullName'];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="font-weight-bold">Email</td>
                                <td>
                                <?php
                                    echo $row['EmailID'];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="font-weight-bold">Phone Number</td>
                                <td>
                                <?php
                                    echo $row['PhoneNumber'];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="font-weight-bold">Address</td>
                                <td>
                                <?php
                                    echo $row['Address'];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="font-weight-bold">Whom to meet</td>
                                <td>
                                <?php
                                    echo $row['WhomToMeet'];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="font-weight-bold">Department</td>
                                <td>
                                <?php
                                    echo $row['Department'];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="font-weight-bold">Reason to meet</td>
                                <td>
                                <?php
                                    echo $row['ReasonToMeet'];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="font-weight-bold text-danger">Entry time</td>
                                <td class="font-weight-bold text-danger">
                                <?php
                                    echo $row['EntryTime'];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="font-weight-bold text-danger">Outing time</td>
                                <td class="font-weight-bold text-danger">
                                <?php
                                    echo $row['OutTime'];
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="font-weight-bold">Outing Remark</td>
                                <td>
                                <?php
                                    echo $row['OutingRemark'];
                                    ?>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</body>
</html>

<?php
       }
    }
    else
    {
        echo "<script>alert('Invalid name or phone number.');</script>";
        echo "<script>window.location.href='search visitor.php';</script>";
    }
}
?>