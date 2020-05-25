<?php 
	session_start();

	if(isset($_SESSION['ad_id'])){
		$ad_id = $_SESSION['ad_id'];

	}else{
		header('location: ../adminLogin.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PORTAL</title>
</head>
<body>

<a href="logout.php">LOGOUT</a>
<h1><a href="addSubject.php">+ADD SUBJECT</a></h1>
<?php 
	include('../dbcon.php');
	$qry = "SELECT * FROM `subjects` ORDER BY `position`";
	$run = mysqli_query($conn,$qry);
	while($data = mysqli_fetch_assoc($run)){
		?>
			<h1><a href="viewSubject.php?sub_id=<?php echo $data['id']; ?>"><?php echo $data['name']; ?></a></h1>
		<?php
	}

?>

<hr>