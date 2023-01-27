<?php require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device,initial-scale=1">
    <title>Forgot password</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="conatiner">
    <div class="card">


        <form method="post" action="fg-pass-process.php">
            <div class="card-header">
                <h1>Send email </h1>



                <hr>
                <div class="card-body">
                    <?php require'er.php';
                    ?>

                    <div>
                        <label for="email">Email:</label>
                        <input class="form-control" name="email" type="email" placeholder="Enter your email" id="email"   required >
                    </div><br>

                    <input  class="btn btn-primary" type="submit" name="reset" value="Reset">

                </div>
            </div>
    </div>
    </form>
</div>
</body>
<link href="  https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>

