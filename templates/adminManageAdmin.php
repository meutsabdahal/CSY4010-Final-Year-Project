<?php
    // adding admin's layout
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Manage Admin</h1>
<center>
<!-- form to manage admin -->
<form action="" method="post" class="mt-3">
    <input type="hidden" name="admin[adminId]">
    
    <label for="">First Name</label><br>
    <input type="text" name="admin[firstName]" value="<?php if(isset($admin['firstName'])) echo $admin['firstName'];?>" ><br>

    <label for="">Last Name</label><br>
    <input type="text" name="admin[lastName]" value="<?php if(isset($admin['lastName'])) echo $admin['lastName'];?>" ><br>

    <label for="">Email</label><br>
    <input type="email" name="admin[email]" value="<?php if(isset($admin['email'])) echo $admin['email'];?>" ><br>

    <label for="">Password</label><br>
    <input type="password" name="admin[password]" value="<?php if(isset($admin['password'])) echo $admin['password'];?>" ><br>

    <label for="">Phone Number</label><br>
    <input type="number" name="admin[phone]" value="<?php if(isset($admin['phone'])) echo $admin['phone'];?>" ><br>

    <input type="submit" name ="submit" value="Save" class="submit mt-3">
</form>
</center>