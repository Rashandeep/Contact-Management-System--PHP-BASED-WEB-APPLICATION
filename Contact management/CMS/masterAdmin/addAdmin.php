<?php
    include('masterAdminHeader.php')
?>

<form method="POST" action="addAdmin.php" enctype="multipart/form-data"><!--IMPORTANT -->
  <div class="container" style="margin-left: 10%">
    <label><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" required><br>
    <label><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" required><br>
    <label>EMAIL</label>
    <input type="email" name="email" required><br>        
    <button type="submit" name="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">

  </div>
</form>	
<?php
	if(isset($_POST['submit'])){
		include("../dbcon.php");
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email_id = $_POST["email"];
        
		$qry ="INSERT INTO `admins`(`id`,`username`,`hashed_password`,`email_id`) VALUES (NULL, '$username', '$password','$email_id');";
		
		$run = mysqli_query($conn,$qry);
		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA INSERTED SUCCESSFULLY!!");
                window.open('masterAdminDashboard.php','_self');
			</script>
		<?php	
		}else{
			echo "INVALID !!";
		}
	}
?>
