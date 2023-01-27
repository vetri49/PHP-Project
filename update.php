

<?php
include 'conn.php';
    $id=$_GET['editid'];
$sql="select * from user where id=$id";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$id=$row['id'];
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];

if(isset($_GET['update'])) {
    $id=$_GET['id'];
   $username=$row['username'];
   $email=$row['email'];
   $password=$row['password'];

    $sql = "update Todo set id='$id',username=$username,email=$email,password=$password where id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        //echo "Updated successfully";
        header('location:edit.php');
    }
}
?>


