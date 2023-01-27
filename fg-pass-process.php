<?php
require 'conn.php';
if(isset($_POST['reset'])) {
    $email = $_POST['email'];

    $sql = "SELECT * FROM USER WHERE email=$email";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';


    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);


    $mail->SMTPDebug = 3;
    $mail->isSMTP(true);
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '0cfadc249f7b7c';
    $mail->Password = '038db8a0672aa8';


    $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;

    $mail->setFrom('vetrivjay86909@gmail.com', 'Admin');
    $mail->addAddress($email);



    $mail->isHTML(true);
    $mail->Subject = 'Reset password';
    $mail->Body = 'To reset your password click <a href="http://localhost/vetri/reset-pass.php?email= '.$email.'">here</a>.</br>Reset your password. ';

    $query = "SELECT *FROM USER WHERE email='$email'";
    $stmt = mysqli_query($conn, $query);

    if ($query->num_rows == 0) {
        if ($mail->send()) {
            echo 'Message has been sent, check your email';

        } else {
            echo "Message could not be sent. Mailer Error: ";
        }
    } else {
        exit();
    }
}