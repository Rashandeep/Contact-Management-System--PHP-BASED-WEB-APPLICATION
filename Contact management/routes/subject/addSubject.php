<?php
    if(isset($_POST['submit'])){
        
        include('../../database/dbcon.php');
        $name = $_POST['name'];
        $position = $_POST['position'];
        $visibility = $_POST['visibility'];
        $qry = "INSERT INTO `subjects` (`id`,`name`,`visibility`,`position`) VALUES (NULL,'$name','$visibility','$position');";
		$run = mysqli_query($conn,$qry);
		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA INSERTED SUCCESSFULLY!!");
                window.open('../../views/admin/adminDashboard.php','_self');
			</script>
		<?php	
		}else{
			echo "INVALID !!";
		}        


    }

?>