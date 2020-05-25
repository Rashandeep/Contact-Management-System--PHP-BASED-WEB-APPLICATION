<?php include('../../routes/subject/subjectData.php'); ?>

<div class="pageHeading">MANAGE SUBJECT</div>

<form method="POST" action="../../routes/subject/editSubjectData.php">
        <table class="formTable">
            <tr>
                <td>
                    <label>SUBJECT NAME</label>
                </td>
                <td>
                    <input type="text" name="name" value="<?php echo $data['name'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                <label>POSITION</label>
                </td>
                <td>
                <input type="number" name="position" value="<?php echo $data['position'] ?>">
                </td>
            </tr>  
            <tr>
                <td>
                    <label>VISIBILITY</label>
                </td>
                <td>
                <label>TRUE</label><input type="radio" name="visibility" value="1">
                <label>FALSE</label><input type="radio" name="visibility" value="0"> 
                </td>
            </tr>  
            <tr>
                <td colspan="2">
                    <input type="hidden" value="<?php echo $data['id']; ?>" name="id" >
                    <input type="submit" class="functionalBtn" value="EDIT" name="submit">
                </td>
            </tr>         
        </table>   
</form>

<?php
    include('../../partials/admin/adminFooter.php');
?>
