<?php



session_start();
if(!isset($_SESSION["uid"]))
{
    header("location:login.php");
}
include("dbconnect.php");
$id = $_SESSION["uid"];

$qry = "SELECT * FROM `user` WHERE id = '$id'";

$result = mysqli_query($connect, $qry);

$data = mysqli_fetch_assoc($result);

$imgsrc = "userimage/".$data['photo'];
?>

<?php
$qry2 = "select * from places";

$result = mysqli_query($connect,$qry2);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .col-md-4 {
            padding: 20px;
            justify-content: space-evenly;
        }

        .navbar a {
            color: white;
        }

        .navbar a:hover {
            font-weight: bold;
            text-decoration: none;
        }

        .dropdown-item {
            color: black;
        }

        .card {
            transition: transform 0.5s;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 1px 1px 5px black;

        }
        .card-body img {
            width: 100%; 
            height: auto; 
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <a class="navbar-brand" href="#">Tours and Travels </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Destinations
                    </a>
                    <div class="dropdown-menu bg-dark">
                        <a class="dropdown-item" href="#">Manali</a>
                        <a class="dropdown-item" href="#">Goa</a>
                        <a class="dropdown-item" href="#">Rajashtan</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Things To Do
                    </a>
                    <div class="dropdown-menu bg-dark">
                        <a class="dropdown-item" href="#">Trecking</a>
                        <a class="dropdown-item" href="#">Rafting</a>
                        <a class="dropdown-item" href="#">Sking</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Plan your trip</a>
                </li>

            </ul>
            <span class="navbar-text">
                <div class="dropdown">
                <button type="button" class="btn dropdown-toggle bg-light" data-toggle="dropdown">
                        <?php echo $data['username']; ?> 
                        <img src="<?php echo $imgsrc ?>" alt="Profile Image" width="25" height="25" style="border-radius: 50%;">
                    </button>
                    <div class="dropdown-menu bg-dark dropdown-menu-right">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>

                    </div>
                </div>
            </span>
        </div>
    </nav>


    <div class="container">
        <div class="row">

        <?php
        while($data = mysqli_fetch_assoc($result))
        
        {?>



            <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                <img src="images/<?php echo $data['photo']; ?>" alt="Image of <?php echo $data['place']; ?>" class="img-fluid card-img-top">
                </div>
                <div class="card-footer">
                   <?php echo $data["place"]; echo"<br>";
                        echo $data["placeinfo"]; echo "<br>";?>
                        <button class="btn btn-dark">Price-<?php echo $data["price"]?>
                    
                </div>
            </div>
        </div>


<?php
        }?>


           

        </div>
    </div>

           

    
           
            

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>