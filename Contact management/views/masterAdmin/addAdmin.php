<?php
    include('../../partials/masterAdmin/masterAdminHeader.php');
?>

<form method="POST" action="../../routes/masterAdmin/addAdmin.php">
  <table class="formTable">
    <tr>  
      <td>
        <label><b>Username</b></label>
      </td>
      <td>
        <input type="text" placeholder="Enter Username" name="username" required>
      </td>
    </tr>
    <tr>  
      <td>
        <label><b>Password</b>
      </td>
      <td>
        <input type="password" placeholder="Enter Password" name="password" required>
      </td>
    </tr>
    <tr>  
      <td>
        <label><b>Email</b></label>
      </td>
      <td>
        <input type="email" name="email" placeholder="Enter Email-id" required>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <button style="width:200px;" class="functionalBtn" type="submit" name="submit">ADD ADMIN</button>
      </td>  
    </tr>
  </table>    
</form>	

<?php
    include('../../partials/masterAdmin/masterAdminFooter.php');
?>
