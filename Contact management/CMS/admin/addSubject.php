<?php
    include('adminHeader.php');
?>

<form method="POST" action="addSubject.php">
    <label>SUBJECT NAME</label>
    <input type="text" name="name"><br>
    <label>POSITION</label>
    <input type="number" name="position"><br>
    <label>VISIBILITY</label><br>
    <label>TRUE</label><input type="radio" name="visibility" value="1">
    <label>FALSE</label><input type="radio" name="visibility" value="0"><br> 
    <input type="submit" value="submit" name="submit">
</form>

<?php
    if(isset($_POST['submit'])){
        
        include('../../dbcon.php');
        $name = $_POST['name'];
        $position = $_POST['position'];
        $visibility = $_POST['visibility'];
        $qry = "INSERT INTO `subjects` (`id`,`name`,`visibility`,`position`) VALUES (NULL,'$name','$visibility','$position');";
		$run = mysqli_query($conn,$qry);
		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA INSERTED SUCCESSFULLY!!");
                window.open('adminDashboard.php','_self');
			</script>
		<?php	
		}else{
			echo "INVALID !!";
		}        


    }

?>