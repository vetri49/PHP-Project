<?php

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];




    $sql = "INSERT INTO user (username, email,password)
VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {

        header("location:login.php?msg=inserted successfully!");
    } else {

        header("location:register.php?msg=not inserted !");
    }
}

$conn->close();