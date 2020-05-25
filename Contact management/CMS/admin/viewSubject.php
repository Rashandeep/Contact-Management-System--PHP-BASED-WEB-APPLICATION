<?php
    
    include('adminHeader.php');
    $sub_id = $_GET['sub_id'];
    $qry = "SELECT * FROM `subjects` WHERE `id`='$sub_id';";
    $run = mysqli_query($conn,$qry) or die(mysqli_error($conn));
   
    if(mysqli_num_rows($run)<1){
        ?>
        <script type="text/javascript">
            alert("NO RECORD FOUND");
            window.open("adminDashboard.php",_self);
        </script>
        <?php
	}else{
        $data = mysqli_fetch_assoc($run); 
        $qry1 = "SELECT * FROM `pages` WHERE `subject_id`='$sub_id';";
        $run1 = mysqli_query($conn,$qry1) or die(mysqli_error());   
    }  
    ?>
    <h1>MANAGE SUBJECT</h1>
    <h2>MENU NAME <?php echo $data['name']; ?></h2>
    <h2>MENU POSITION <?php echo $data['position']; ?></h2>
    <h2>VISIBILITY <?php echo $data['visibility']; ?></h2>
    
    <h3><a href="editSubject.php?subject_id=<?php echo $data['id']; ?>">EDIT</a></h3>
    <h3><a href="deleteSubject.php?subject_id=<?php echo $data['id']; ?>">DELETE</a></h3>    
    <hr>

    <h1>PAGES IN THIS SUBJECT</h1>
    <h3><a href="addPage.php?subject_id=<?php echo $data['id']; ?>">+ADD PAGE</a></h3>
    <?php
        while($data1 = mysqli_fetch_assoc($run1)){
            echo "REACHED TILL PAGES!"
            ?>
            <h2><a href="viewPage.php?page_id=<?php echo $data1['id'] ?>"><?php echo $data1['menu_name']; ?></a></h2>
            <?php
        }
    ?>
