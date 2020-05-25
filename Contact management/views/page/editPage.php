<?php
    include('../../partials/admin/adminHeader.php');
    include('../../routes/page/pageData.php');
?>

<div class="pageHeading">MANAGE PAGE</div>


<form method="POST" action="../../routes/page/editPage.php">
        
        <input type="hidden" value="<?php echo $data['id']; ?>" name="id">
        
        <table class="formTable">
            <tr>
                <td>
                    <label>PAGE NAME</label>
                </td>
                <td>
                    <input type="text" name="name" value="<?php echo $data['menu_name'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                <label>POSITION</label>
                </td>
                <td>
                    <input type="number" name="position" value="<?php echo $data['position'] ?>" required>
                </td>
            </tr>  
            <tr>
                <td>
                    <label>VISIBILITY</label>
                </td>
                <td>
                <label>TRUE</label><input type="radio" name="visible" value="1" required>
                <label>FALSE</label><input type="radio" name="visible" value="0" required> 
                </td>
            </tr> 
            <tr>
                <td>
                    <label>CONTENT</label>
                </td> 
            </tr>
            <tr>
                <td colspan="2">
                    <textarea name="content" required><?php echo $data['content']; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input class="functionalBtn" type="submit" value="EDIT" name="submit"> 
                </td>
            </tr>    
        </table>

</form>



<?php
    include('../../partials/admin/adminFooter.php');
?>