<?php

        include('../dbcon.php');
       $s_id = $_GET['subject_id'];
        $qry = "DELETE FROM `subjects` WHERE `id`='$s_id';";
		$run = mysqli_query($conn,$qry);
		if($run == true){
            $qry1 = "DELETE FROM `pages` WHERE `subject_id`='$s_id';";
            $run1 = mysqli_query($conn,$qry1);
            if($run1 == true){

         
            ?>

			<script type="text/javascript">
				alert("SUBJECT AND ITS CORRESPONDING PAGES DELETED SUCCESSFULLY!!");
               window.open('adminDashboard.php','_self');
			</script>
        <?php	
            }else{
                echo 'UNABLE TO DELETE THE CORRESPONDING PAGES';
            }
		}else{
			echo "INVALID !!";
		}        


?>