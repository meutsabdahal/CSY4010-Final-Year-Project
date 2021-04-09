<?php
	require 'vendorHeader.php';
?>

<section>
    <h1 class="text-center mt-1 font-italic">Manage Products</h1>
    <center>

    <form action="" method="post" class="mt-3">
        <input type="hidden" name="productId">
        
        <label for="">Produt Name</label><br>
        <input type="text" name=""><br>

        <label for="">Product Description</label><br>
        <textarea name="" id="" cols="30" rows="10"></textarea><br>

        <label>Category</label>
        <select name="" >
            <option value="">-- Select a Category --</option>
                <?php
                foreach ($categories as $category) {
                    ?>
                    <option value="<?php echo $category['categoryId'];?>"><?php echo $category['categoryName'];?> </option>
                    <?php } ?>
        </select><br>

        <label for="">Default Image</label>
        <input type="file"><br>

        <label for="">Product Image</label>
        <input type="file"><br>

        <label for="">Quantity</label><br>
        <input type="number" name=""><br>

        <label for="">Price</label><br>
        <input type="number" name=""><br>

        <label for="">Keywords</label><br>
        <input type="text"><br>

        <input type="hidden" name="addedBy">

        <input type="submit" name ="submit" value="Save" class="submit mt-3">
    </form>
    </center>
</section>
<?php
	require 'footer.php';
?>

