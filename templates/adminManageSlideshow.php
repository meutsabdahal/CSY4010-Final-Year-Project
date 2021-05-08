<?php
    // adding admin's layout
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Add Images</h1>
<center>
<!-- form to manage slideshow -->
<form action="" method="post" enctype="multipart/form-data" class="mt-3">
    <input type="hidden" name="slideshowId" >
    
    <label for="">Choose Images: </label>
    <input type="file" name="images"><br>

    <input type="submit" name ="submit" value="Save" class="submit mt-3">
</form>
</center>