<?php
	if(isset($_POST['delete'])){
		include('../dbcon.php');
		$ad_id = $_GET["ad_id"];
		$sql= "DELETE FROM `admins` WHERE `id`='$ad_id';";
		$run = mysqli_query($conn,$sql);

		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA DELETEDD SUCCESSFULLY!!");
				window.open('masterAdminDashboard.php','_self');
			</script>
			<?php
		
		}else{
			?>
			<script type="text/javascript">
				alert("DELETION UNSUCCESSFULL!!!");
			</script>
		<?php	
		}
		

	}

?>