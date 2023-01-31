<?php
include 'conn.php';

if(isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    echo '<div class="alert alert-success">' . $msg . '</div>';

}

    $id = $_GET['id'];

$sql = "select * from user where id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
    $id=$row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];




    if (isset($_POST['update'])) {
        $id=$_POST['id'];

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "UPDATE user 
           SET username='$username',email='$email',password='$password' WHERE email='$email'";

        $result = mysqli_query($conn, $sql);


        if ($result) {

             header('location:home.php?msg=updated successfully');
        } else {
            header('location:edit.php?msg=failed');
        }



}
?>




<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device,initial-scale=1">
    <title>Edit-profile</title>
    <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
    <link href="AdminLTE-master/dist/css/adminlte.css" rel="stylesheet" >
    <link href="AdminLTE-master/dist/js/adminlte.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="conatiner">
    <div class="card">


        <form method="post" action="edit.php">
            <div class="card-header">
                <h1>Edit-profile </h1>

                <hr>
                <div class="card-body">

                    <table class="table table-bordered" >
                        <thead>
                        <tr>

                            <td><b>Username</b></td>
                            <td><b>E-mail</b></td>
                            <td><b>Password</b></td>
                            <td><b>Action</b></td>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>


                            <td><input type="text" name="username" value="<?php echo $row['username'];?>"></td>

                            <td><input type="email" name="email" value="<?php echo $row['email'];?>"></td>

                            <td><input type="text" name="password" value="<?php echo $row['password'];?>"></td>

                            <td><input  class="btn btn-success" type="submit" name="update" value="Update"></td>
                        </tr>
                        </tbody>
                    </table>
        </form>

</div>
</body>
<link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>
