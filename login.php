<?php

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
    echo '<div class="alert alert-success">' .$msg.'</div>';
}


require 'conn.php';
session_start();

$errors = [];

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM user WHERE   email='$email' AND password='$password'";

    $sql = mysqli_query($conn, $query);
    $row = mysqli_num_rows($sql);


    if ($row==1) {


            header("Location: home.php?msg=successfully logged in");

    } else {
          header("location:login.php?msg=Invalid email /password!");

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device,initial-scale=1">
    <title>login_page</title>
    <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
    <link href="AdminLTE-master/dist/css/adminlte.css" rel="stylesheet" >
    <link href="AdminLTE-master/dist/js/adminlte.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<style>
    .reg{
        margin-left: 90%;
        border:hidden;
    }
    .fg{
        margin-left: 90%;
        border: dot-dash;

    }
    .card-header{
        font-family: sans-serif;
        font-style: normal;
        font-
    }
</style>
<body>
<div class="conatiner">
    <div class="card">


        <form method="post" action=""  >

                <h1 class="card-header">Login page</h1>
                <hr>
                <div class="card-body">
                    <a href="register.php" class="reg"><i class="btn btn-danger"> New Register</i></a>
                    <?php if (isset($_SESSION["errorMessage"])) {
                    ?>
                    <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                    <?php
                    unset($_SESSION["errorMessage"]);
                }
                ?>
                    <?php require'er.php';
                    ?>
                    <div>
                        <label for="email">Email:</label>
                        <input class="form-control" name="email" type="email" placeholder="Enter your email" id="email" required>
                    </div><br>
                    <div>
                        <label for="password">Password:</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Enter Your Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                    </div><br>
                    <input  class="btn btn-success" type="submit" name="login" value="submit">
                    <div>
                        <a href="fg-pass.php" class="fg"><i class="btn btn-primary">Forgot password</i></a><br>

                </div>
            </div>
        </form>
    </div>
</body>

<script>

</script>


</html>
