<?php
    include('masterAdminHeader.php');
    include('../dbcon.php');
    $qry = "SELECT * FROM `masterAdmin` WHERE `id`='$master_ad_id';";
    $run = mysqli_query($conn,$qry);
    $data = mysqli_fetch_assoc($run);
    echo $data['username'];
?>



<h3 style="float: right; margin-right: 30px;"><a href="logout.php">LOGOUT</a></h3>
		<h1>WELCOE TO ADMIN PORTAL</h1>

	</div>
	<table border="2" align="center" style="font-size: 24px;">
		<tr>
			<td><a href="addAdmin.php">ADD ADMIN</a></td>
		</tr>
		<tr>
			<td><a href="deleteAdmin.php">DELETE ADMIN</a></td>
		</tr>
		<!-- <tr>
			<td><a href="updatestudent.php">UPDATE ADMIN</a></td>
		</tr>				 -->
	</table>