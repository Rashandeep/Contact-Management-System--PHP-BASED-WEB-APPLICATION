<?php
    include('adminHeader.php');
    $subject_id = $_GET['subject_id'];
?>

<h1>MANAGE SUBJECT</h1>
<form method="POST" action="addPageData.php">
    <input type="hidden" value="<?php echo $subject_id; ?>" name="subject_id" ><br>
    <label>PAGE NAME</label>
    <input type="text" name="name"><br>
    <label>POSITION</label>
    <input type="number" name="position"><br>
    <label>VISIBILITY</label><br>
    <label>TRUE</label><input type="radio" name="visible" value="1">
    <label>FALSE</label><input type="radio" name="visible" value="0"><br> 
    <label>CONTENT</label>
    <textarea name="content"></textarea><br> 
    <input type="submit" value="CREATE" name="submit">
</form>
