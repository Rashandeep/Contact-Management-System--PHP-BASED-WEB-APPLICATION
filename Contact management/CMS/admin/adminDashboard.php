<?php
    include('adminHeader.php');
    include('../dbcon.php');
    $qry = "SELECT * FROM `admins` WHERE `id`='$ad_id';";
    $run = mysqli_query($conn,$qry);
    $data = mysqli_fetch_assoc($run);
    echo $data['email_id'];
?>


