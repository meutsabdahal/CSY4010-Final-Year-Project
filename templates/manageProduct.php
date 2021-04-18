<?php
	require 'vendorHeader.php';
?>

<section>
    <h1 class="text-center mt-1 font-italic">Manage Products</h1>
    <center>

    <form action="" method="post" enctype="multipart/form-data" class="mt-3">
        <input type="hidden" name="productId">
        
        <label for="">Produt Name</label><br>
        <input type="text" name="productName"><br>

        <label for="">Product Description</label><br>
        <textarea name="description" id="" cols="30" rows="10"></textarea><br>

        <label>Category</label>
        <select name="categoryId" >
            <option value="">-- Select a Category --</option>
                <?php
                foreach ($categories as $category) {
                    ?>
                    <option value="<?php echo $category['categoryId'];?>"><?php echo $category['categoryName'];?> </option>
                    <?php } ?>
        </select><br>

        <label for="">Thumbnail Image</label>
        <input type="file" name="thumnailImage"><br>

        <label for="">Product Image</label>
        <input type="file" name="productImage"><br>

        <label for="">Quantity</label><br>
        <input type="number" name="quantity"><br>

        <label for="">Price</label><br>
        <input type="number" name="price"><br>

        <label for="">Keywords</label><br>
        <input type="text" name="keyword"><br>

        <input type="hidden" name="vendorId" value="<?php echo $_SESSION['sessVendorId'] ?>">

        <input type="submit" name ="submit" value="Save" class="submit mt-3">
    </form>
    </center>
</section>
<?php
	require 'footer.php';
?>

