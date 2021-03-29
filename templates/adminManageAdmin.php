<?php
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Manage Admin</h1>
<center>

<form action="" method="post" class="mt-3">
    <input type="hidden" name="admin[adminId]">
    
    <label for="">First Name</label><br>
    <input type="text" name="admin[firstName]"><br>

    <label for="">Last Name</label><br>
    <input type="text" name="admin[lastName]"><br>

    <label for="">Email</label><br>
    <input type="email" name="admin[email]"><br>

    <label for="">Password</label><br>
    <input type="password" name="admin[password]"><br>

    <label for="">Phone Number</label><br>
    <input type="number" name="admin[phone]"><br>

    <input type="submit" name ="submit" value="Save" class="submit mt-3">
</form>
</center>