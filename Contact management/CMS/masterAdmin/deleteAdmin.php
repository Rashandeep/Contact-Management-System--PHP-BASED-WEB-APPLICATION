<?php
    include("masterAdminHeader.php")
?>

<form method='post' action="deleteAdmin.php">
	<table>
		<tr>
			<td>
				ENTER USERNAME NAME 
			</td>
			<td>
				<input type="text" name="username" placeholder="username" required="required">
			
			</td>

			<td colspan="4" align="center"><input type="submit" name="submit" value="search"></td>
		</tr>
	</table>

</form>
<table border="1" width="50%" align="center">
<?php
	if(isset($_POST['submit'])){
		include("../dbcon.php");
		$username = $_POST["username"];
		
		$qry = "SELECT * FROM `admins` WHERE `username` LIKE '%$username%';";
		$run = mysqli_query($conn,$qry);
		if(mysqli_num_rows($run)<1){
			?>
			<script type="text/javascript">
				alert("NO RECORD FOUND");
			</script>	
			<?php
		}else{
			$count = 0;//ITERATOR
			while ($data = mysqli_fetch_assoc($run)) {
				$count++;
				?>

					<tr align="center">
						<td><?php echo "$count"; ?></td>
						
						<td><?php echo $data['username'] ?></td>
						<td><?php echo $data['email_id'] ?></td>
						<form method="post" action="deleteAdmindata.php?ad_id=<?php echo $data['id'] ?>">
						    <td><input type="submit" value="delete" name="delete"></td>
						</form>					
					</tr>

				<?php	
			}
		}
	}
?>
</table>
