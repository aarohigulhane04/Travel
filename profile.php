<?php
session_start();

include("dbconnect.php");

$id = $_SESSION["uid"];

$qry = "select * from user where id = '$id'";
$result = mysqli_query($connect, $qry);
$data = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Profile</title>
    <style>
        #form {
            height: 85vh;
            align-content: center;
        }
       
    </style>
</head>

<body>


    <div class="row" id="form">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-header bg-dark">
                    <h3 style="color:white;"> Your Profile</h3>
                </div>
                <div class="card-body p-3">
                    <table class="table table-hover">
                        <tr>
                            <th> Username :</th>
                            <td><?php echo $data['username'] ?></td>
                        </tr>
                        <tr>
                            <th> Mobile :</th>
                            <td><?php echo $data['mobile'] ?></td>
                        </tr>
                        <tr>
                            <th> Email ID :</th>
                            <td><?php echo $data['email'] ?></td>
                        </tr>
                    </table>
                    <a href="editprof.php" class="btn btn-dark">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>