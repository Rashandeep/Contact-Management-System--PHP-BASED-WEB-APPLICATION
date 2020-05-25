<?php
        include('../../database/dbcon.php');
       $page_id = $_GET['page_id'];
        $qry = "DELETE FROM `pages` WHERE `id`='$page_id';";
		$run = mysqli_query($conn,$qry);
		if($run == true){      
            ?>

			<script type="text/javascript">
				alert("SELECTED PAGE IS DELETED SUCCESSFULLY!!");
               window.open('../../views/admin/adminDashboard.php','_self');
			</script>
			
        <?php	
		}else{
			echo "INVALID !!";
		}        


?>