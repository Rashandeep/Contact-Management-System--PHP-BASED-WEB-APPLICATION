<?php

if(isset($_POST['submit'])){
        
        include('../dbcon.php');
       $page_id = $_POST['id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $visible = $_POST['visible'];
        $content = $_POST['content'];
        $qry = "UPDATE `pages` SET `menu_name`='$name',`visible`='$visible',`position`='$position',`content`='$content' WHERE `id`='$page_id';";
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