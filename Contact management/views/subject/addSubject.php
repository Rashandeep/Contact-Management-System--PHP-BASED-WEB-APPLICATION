<?php
    include('../../partials/admin/adminHeader.php');
?>

<form method="POST" action="../../routes/subject/addSubject.php">

        <table class="formTable">
            <tr>
                <td>
                    <label>SUBJECT NAME</label>
                </td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>
                <label>POSITION</label>
                </td>
                <td>
                <input type="number" name="position">
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
                    <input class="functionalBtn" style="width:300px;" type="submit" value="ADD SUBJECT" name="submit">
                </td>
            </tr>         
        </table>   
</form>

<?php
    include('../../partials/admin/adminFooter.php');
?>
