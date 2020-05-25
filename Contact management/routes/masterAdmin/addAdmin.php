<?php
	if(isset($_POST['submit'])){
		include('../../database/dbcon.php');
        $username = $_POST["username"];
        $password = $_POST["password"];
		$email_id = $_POST["email"];
		
		$salted = "dsfds8990sdfds".$password."sdfs8979sdfsd";
		
		$hashed = hash('sha512',$salted);
        
		$qry ="INSERT INTO `admins`(`id`,`username`,`hashed_password`,`email_id`) VALUES (NULL, '$username', '$hashed','$email_id');";
		
		$run = mysqli_query($conn,$qry);
		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA INSERTED SUCCESSFULLY!!");
                window.open('../../views/masterAdmin/masterAdminDashboard.php','_self');
			</script>
		<?php	
		}else{
			echo "INVALID !!";
		}
	}
?>