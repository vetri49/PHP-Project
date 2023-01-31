
<?php require'conn.php';

if(isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    echo '<div class="alert alert-success">' . $msg . '</div>';

}
if(isset($_GET['email'])){
$email = $_GET['email'];

$sql="SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$id=$row['id'];

$username = $row['username'];
$email = $row['email'];
$password = $row['password'];




if (isset($_POST['set'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "UPDATE user SET password='$password' WHERE email='$email'";

    $result = mysqli_query($conn, $sql);


    if ($result) {

        header('location:success.php?msg=updated successfully');
    } else {
            header('location:reset-pass.php?msg=failed');
    }



}}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device,initial-scale=1">
    <title>Reset password</title>
    <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">
    <link href="AdminLTE-master/dist/css/adminlte.css" rel="stylesheet" >
    <link href="AdminLTE-master/dist/js/adminlte.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="conatiner">
    <div class="card">


        <form method="post" action="">
            <div class="card-header">
                <h1>Reset password </h1>



                <hr>
                <div class="card-body">
                    <?php require'er.php';
                    ?>

                    <div>
                        <label for="email">Email:</label>
                        <input class="form-control" name="email" type="email"  id="email"  placeholder="Enter your email" required >
                    </div><br>
                    <div>
                        <label for="password"> New password:</label>
                        <input class="form-control" type="password" name=" password" id="password" placeholder="Enter Your Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                    </div><br>

                    <input  class="btn btn-primary" type="submit" name="set" value="Reset">

                </div>
            </div>
    </div>
    </form>
</div>
</body>

<link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>

