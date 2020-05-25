<?php
if(isset($_POST['submit'])){
        
        include('../../database/dbcon.php');
        $subject_id = $_POST['subject_id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $visible = $_POST['visible'];
        $content = $_POST['content'];
        $qry = "INSERT INTO `pages`(`id`, `subject_id`, `menu_name`, `visible`, `position`, `content`) VALUES (NULL,'$subject_id','$name','$visible','$position','$content');";
		$run = mysqli_query($conn,$qry) or die(mysqli_query($conn));
		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA INSERTED SUCCESSFULLY!!");
                window.open('../../views/admin/adminDashboard.php','_self');
			</script>
		<?php	
		}else{
		 ?>
			<script type="text/javascript">
				alert("DATA NOT INSERTED SUCCESSFULLY");
                window.open('../../views/admin/adminDashboard.php','_self');
			</script>
		 <?php
		}        
}

?>