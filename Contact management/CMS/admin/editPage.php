<?php
    
    include('adminHeader.php');
    $page_id = $_GET['page_id'];
    $qry = "SELECT * FROM `pages` WHERE `id`='$page_id';";
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
    } 
?>

<h1>MANAGE PAGE</h1>
<form method="POST" action="editPageData.php">
    <input type="hidden" value="<?php echo $data['id']; ?>" name="id" ><br>
    <label>PAGE NAME</label>
    <input type="text" name="name" value="<?php echo $data['menu_name'] ?>"><br>
    <label>POSITION</label>
    <input type="number" name="position" value="<?php echo $data['position'] ?>"><br>
    <label>VISIBILITY</label><br>
    <label>TRUE</label><input type="radio" name="visible" value="1">
    <label>FALSE</label><input type="radio" name="visible" value="0"><br> 
    <label>CONTENT</label>
    <textarea name="content"><?php echo $data['content']; ?></textarea><br> 
    <input type="submit" value="EDIT" name="submit">
</form>
