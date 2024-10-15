<?php
session_start();
include("../dbconnect.php");


// $id = $_SESSION["uid"];


$qry = "SELECT * FROM `user`";

$result = mysqli_query($connect, $qry);


if (!$result) {
    die("Query failed: " . mysqli_error($connect));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link 
      rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css"
    />
    <title>Manage User</title>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Manage User</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Username</th>
                    <th>Mobile</th>
                    <th>Email ID</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo ($data['username']); ?></td>
                    <td><?php echo ($data['mobile']); ?></td>
                    <td><?php echo ($data['email']); ?></td>
                    <td>
                        <img src="../userimage/<?php echo ($data['photo']); ?>" alt="Image of <?php echo ($data['username']); ?>" class="img-fluid" width="100">
                    </td>
                    <td>
                        <a href="editprofile.php?id=<?php echo $data['id'];?>" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></a>
                        <a href="deleteprofile.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');"><i class="bi bi-trash-fill"></i> </a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <button class="btn btn-dark">Logout</button>

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
      integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
      crossorigin="anonymous"
    ></script>
</body>
</html>


