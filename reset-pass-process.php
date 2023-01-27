<?php require'conn.php';

if(isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    echo '<div class="alert alert-success">' . $msg . '</div>';

}
if(isset($_GET['email'])){
    $email=$_GET['email'];


    $sql=mysqli_query($conn,"SELECT FROM USER WHERE email='$email'");
    var_dump($sql);
    if($sql->num_rows==0){
        header('location:reset-pass.php');
    }

    if(isset($_POST['set'])){
        $email=$_POST['email'];
        $new_password=$_POST['password'];


        $query = "UPDATE user SET password='$new_password' WHERE email=$email";

        $stmt = mysqli_query($conn, $query);
        var_dump($stmt);
        if ($stmt == true) {

            header('location:success.php?msg=reset password successfully');
        }
    }
}
