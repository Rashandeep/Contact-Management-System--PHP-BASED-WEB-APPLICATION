<?php

	session_start();
		
	if(isset($_SESSION['ad_id'])){
		header('location: admin/adminDashboard.php');
	}

?>
<html>
<head>
 <title>ADMIN LOGIN PORTAL</title>
</head>
<body> 
<form method="POST" action="adminLogin.php">


  <div class="container" style="margin-left: 10%">
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" required><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>
        
    <button type="submit" name="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">

  </div>
</form>
</div>

</body>
</html>
<?php
	include('dbcon.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$qry = "SELECT * FROM `admins` WHERE `username`='$username' AND `hashed_password`='$password';";

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

			//echo "admin id = ".$admin_id;

			$_SESSION['ad_id'] = $admin_id;

			header('location: admin/adminDashboard.php');

		}
	}

?>