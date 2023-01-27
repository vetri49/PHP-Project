<?php
require'conn.php';
session_start();

$errors=[];

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT id FROM user WHERE email='$email' AND password='$password'";
    $sql=mysqli_query($conn,$query);
    $row  = mysqli_num_rows($sql);

    if($row==1) {
        if (password_verify($_POST['password'], $password)) {

            header("Location: home.php?msg=successfully logged in");
        }
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
