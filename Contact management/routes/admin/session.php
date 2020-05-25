<?php 
	session_start();

	if(isset($_SESSION['ad_id'])){
                $ad_id = $_SESSION['ad_id'];
                include('../../database/dbcon.php');
                $qry = "SELECT * FROM `admins` WHERE `id`='$ad_id';";
                $run = mysqli_query($conn,$qry);
                $data = mysqli_fetch_assoc($run);
	}else{
		header('location: ../../views/admin/adminLogin.php');
	}
?>