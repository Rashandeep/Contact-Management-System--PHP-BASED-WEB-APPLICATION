<?php
		include('../../database/dbcon.php');
		include('../../routes/masterAdmin/session.php');
		$ad_id = $_GET["ad_id"];
		$sql= "DELETE FROM `admins` WHERE `id`='$ad_id';";
		$run = mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA DELETEDD SUCCESSFULLY!!");
				window.open('../../views/masterAdmin/masterAdminDashboard.php','_self');
			</script>
			<?php
		
		}else{
			?>
			<script type="text/javascript">
				alert("DELETION UNSUCCESSFULL!!!");
			</script>
		<?php	
		}
?>