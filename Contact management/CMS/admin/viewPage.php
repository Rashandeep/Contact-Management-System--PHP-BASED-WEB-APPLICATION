<?php    
    include('adminHeader.php');
    $page_id = $_GET['page_id'];
    $qry = "SELECT * FROM `pages` WHERE `id`='$page_id';";
    $run = mysqli_query($conn,$qry) or die(mysqli_error($conn));
    if(mysqli_num_rows($run)<1){
        alert('NO SUCH PAGE FOUND');
        window.open("adminDashboard.php",_self); 
    }else{
        $data = mysqli_fetch_assoc($run);
    }
   
?>

<h1>MANAGE PAGE</h1>
<h1>MENU NAME: <?php echo $data['menu_name']; ?> </h1>
<h2> POSITION: <?php echo $data['position']; ?></h2>
<h2>VISIBLE: <?php echo $data['visible']; ?></h2>
<textarea readonly><?php echo $data['content']; ?></textarea>

<hr>

<h3><a href="editPage.php?page_id=<?php echo $page_id; ?>">EDIT</a></h3>
<h3><a href="deletePage.php?page_id=<?php echo $page_id; ?>">DELETE</a></h3>    
   
