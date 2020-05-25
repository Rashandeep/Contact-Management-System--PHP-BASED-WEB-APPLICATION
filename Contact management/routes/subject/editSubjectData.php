<?php
if(isset($_POST['submit'])){
        
        include('../../database/dbcon.php');
        $s_id = $_POST['id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $visibility = $_POST['visibility'];
        $qry = "UPDATE `subjects` SET `name`='$name',`visibility`=$visibility,`position`='$position' WHERE `id`='$s_id';";
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