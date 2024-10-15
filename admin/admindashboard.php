<?php
session_start();

include("../dbconnect.php");

if(isset($_SESSION["uid"]))
{
    header("location:admindashboard.php");
}

if(isset($_POST["upload_button"])){

$filename = $_FILES["photo"]["tmp_name"];
$orgfilename = $_FILES["photo"]["name"];

// $filetypes = explode(".", $orgfilename);
// $ext = $filetypes[1]; 


$fileInfo = pathinfo($orgfilename);
$ext = strtolower($fileInfo['extension']);

$allowtypes = array('jpg', 'png'); 

if(in_array($ext,$allowtypes)){
    move_uploaded_file($filename, "../images/$orgfilename");



$place = $_POST["place"];
$placeinfo = $_POST["info"];
$price = $_POST["price"];


$qry = "INSERT INTO `places`( `place`, `placeinfo`, `price`, `photo`) VALUES ('$place','$placeinfo','$price','$orgfilename')";

$result = mysqli_query($connect, $qry);



if($result)
            {
                ?> <script> alert("Uploaded "); </script> <?php
            }
        
        else{
            ?> <script> alert("Invalid Extension"); </script> <?php
        }
}

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <title>Admin Portal</title>
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
                    <h3 style="color:white;"> Upload Data</h3>
                </div>
                <div class="card-body p-5">
                    <form method="post" enctype="multipart/form-data">
                       Place: <input type="text" name="place" placeholder="Place" class="form-control mb-2" />
                       Info: <textarea name="info" type="text" placeholder="Info" class="form-control mb-2" rows="4" cols="6" ></textarea>
                        Price: <input name="price" type="number" placeholder="Price" class="form-control mb-2" />
                        Photo: <input name="photo" type="file" class="form-control mb-2" />
                        <button type="submit" class="btn btn-dark my-3" name="upload_button">Upload</button>
                        <a href="../logout.php">Logout</a>
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