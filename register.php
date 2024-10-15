<?php

if (isset($_POST["register_button"])) {

    include("dbconnect.php");

    $filename = $_FILES["photo"]["tmp_name"];
    $orgfilename = $_FILES["photo"]["name"];

    $filetypes = explode(".", $orgfilename);
    $ext = $filetypes[1]; 
    


    
    $allowtypes = array('jpg','JPG', 'png', 'PNG');

    if($_FILES["photo"]["size"]>100000 && $_FILES["photo"]["size"]<500000)
    {
        if(in_array($ext, $allowtypes))
        {
            move_uploaded_file($filename, "userimage/$orgfilename");



    $un = $_POST["username"];
    $mob = $_POST["mobile"];
    $eid = $_POST["email"];
    $pwd = $_POST["password"];

    $qry = "INSERT INTO `user`(`id`, `username`, `mobile`, `email`, `password`, `photo`) VALUES (NULL,'$un','$mob','$eid','$pwd', '$orgfilename')";

    $result = mysqli_query($connect, $qry);

    if($result)
            {
                ?> <script> alert("Register Success"); </script> <?php
            }
        }
        else{
            ?> <script> alert("Invalid Extension"); </script> <?php
        }
    }else{

        ?> <script> alert("Size is not proper"); </script> <?php
    }


}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        #form {
            height: 85vh;
            align-content: center;
        }
        body{
        background-image: url("images/background.jpg");
      }
    </style>
</head>

<body>
    <div class="row" id="form">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-header bg-dark">
                    <h3 style="color:white;"> Register</h3>
                </div>
                <div class="card-body p-5">
                    <form method="post" enctype="multipart/form-data">
                       Username: <input type="text" name="username" placeholder="Username" class="form-control mb-2" />
                        Mobile Number: <input name="mobile" type="tel" placeholder="Mobile" class="form-control mb-2" />
                        Email id: <input name="email" type="email" placeholder="Email" class="form-control mb-2" />
                        Password: <input name="password" type="password" placeholder="Password" class="form-control mb-2" />
                        Photo: <input name="photo" type="file" class="form-control mb-2" />
                        <button type="submit" class="btn btn-dark my-3" name="register_button">Register</button>
                        <p> Already Have an Account? <a href="login.php">Sign in </a> </p>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>