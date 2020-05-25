<?php
	include('../../database/dbcon.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$salted = "dsfds8990sdfds".$password."sdfs8979sdfsd";
		
		$hashed = hash('sha512',$salted);

		$qry = "SELECT * FROM `admins` WHERE `username`='$username' AND `hashed_password`='$hashed';";

		$run = mysqli_query($conn,$qry);

		$row = mysqli_num_rows($run);

		if($row<1){
			?>
			<script type="text/javascript">
				alert("INVALID CREDENTIALS");
			</script>
			<?php
		}else{
			$data = mysqli_fetch_assoc($run);
			$admin_id = $data['id'];
			session_start();
			$_SESSION['ad_id'] = $admin_id;
			header('location: ../../views/admin/adminDashboard.php');

		}
	}

?>