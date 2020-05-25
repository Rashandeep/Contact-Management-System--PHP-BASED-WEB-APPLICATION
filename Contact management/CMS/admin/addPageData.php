<?php
if(isset($_POST['submit'])){
        
        include('../dbcon.php');

        $subject_id = $_POST['subject_id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $visible = $_POST['visible'];
        $content = $_POST['content'];
        $qry = "INSERT INTO `pages`(`id`, `subject_id`, `menu_name`, `visible`, `position`, `content`) VALUES (NULL,'$subject_id','$name','$position','$visible','$content');";
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