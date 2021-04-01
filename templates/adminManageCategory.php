<?php
	require 'adminLayout.php';
?>


<h1 class="text-center mt-1 font-italic">Manage Category</h1>
<center>

<form action="" method="post" class="mt-3">
    <input type="hidden" name="category[categoryId]" value="<?php if(isset($category['categoryId'])) echo $category['categoryId'];?>" >

    <label for="">Category Name</label><br>
    <input type="text" name="category[categoryName]" value="<?php if(isset($category['categoryName'])) echo $category['categoryName'];?>" required><br>

    <input type="submit" name ="submit" value="Save" class="submit mt-3">
</form>
</center>