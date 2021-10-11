<?php

$conn=mysqli_connect("localhost","root","","naan-visitorrecord");

if(isset($_POST['submit']))
{
    $from=$_POST['from'];
    $to=$_POST['to'];

    $sql="select * from visitorinfo where EntryTime between '$from' and '$to'";

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
                        <a href="visitor between dates.php" class="nav-link text-danger font-weight-bold" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;">
                            <i class="fas fa-arrow-left"></i>
                                Back
                        </a>
                            <div class="d-flex justify-content-center">
                    <div class="card">
                        <div class="card-header text-light bg-primary font-weight-bold text-uppercase">
                            <i class="fas fa-calendar"></i>
                                Report between Date
                                <?php
                                echo $from;
                                ?>
                                to
                                <?php
                                echo $to;
                                ?>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead class="text-center">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Email ID</th>
                                        <th>Phone Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                <?php
                                
                                $conn=mysqli_connect("localhost","root","","naan-visitorrecord");

                                $sql="select * from visitorinfo";

                                $result=mysqli_query($conn,$sql);

                                if(mysqli_num_rows($result)>0)
                                {
                                    while($row=mysqli_fetch_array($result))
                                    {
                                
                                ?>
                                    <tr>
                                        <td>
                                        <?php
                                        echo $row['ID'];
                                        ?>
                                        </td>
                                        <td>
                                        <?php
                                        echo $row['FullName'];
                                        ?>
                                        </td>

                                        <td>
                                        <?php
                                        echo $row['EmailID'];
                                        ?>
                                        </td>

                                        <td>
                                        <?php
                                        echo $row['PhoneNumber'];
                                        ?>
                                        </td>

                                        <td>
                                        <a href="update visitor.php ?update=
                                        <?php
                                        echo $row['ID'];
                                        ?>
                                        "onclick="return confirm('Do you want to update this row?');">
                                        <i class="fas fa-pen-square"></i>
                                        </a>
                                        &nbsp;

                                        <a href="manage visitor.php ?delete=
                                        <?php
                                        echo $row['ID'];
                                        ?>
                                        "onclick="return confirm('Are you sure you want to delete this entire row?');">
                                        <i class="fas fa-trash"></i>
                                        </a>
                                        </td>
                                    </tr>

                                    <?php
                                    }
                                }
                                    ?>
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
}
?>