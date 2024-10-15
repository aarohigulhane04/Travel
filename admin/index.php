<?php
session_start();
if(isset($_SESSION["uid"]))
{
    header("location:adminpage.php");
}

if (isset($_POST["login_button"])) {

    include("dbconnect.php");

    $eid = $_POST["email"];
    $pwd = $_POST["password"];

    if($eid=="admin@gmail.com" && $pwd=="admin"){
        header("location:adminpage.php");
    }

    
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
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
          <div class="card-header bg-dark"> <h3 style="color:white;"> Login </h3></div>
          <div class="card-body p-5">
            <form method="post">
              
              <input name="email"
                type="email"
                placeholder="Email"
                class="form-control mb-2"
              />
              <input name="password"
                type="password"
                placeholder="Password"
                class="form-control mb-2"
              />
              <button type="submit" class="btn btn-dark my-3" name="login_button">Admin Login</button>
            
            </form>
          </div>
        </div>
      </div>
    </div>

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