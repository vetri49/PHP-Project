<?php
require 'conn.php';


            $id = $_GET['delid'];

            $query="DELETE FROM user WHERE id=$id";
            print_r($query);
            $stmt=mysqli_query($conn,$query);
            if ($stmt == true) {
                header('location:home.php?msg=deleted');
            }


