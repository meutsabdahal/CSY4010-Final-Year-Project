<?php
    require 'header.php';

?>


<section>
    <?php
        foreach ($products as $product) {
            ?>
            <a href="productDetails?pId=<?php echo $product['productId']; ?>">
            <div class="review-container shadow bg-white mt-3">
                <img src="productImages/<?php echo $product['thumnailImage'];?>" class="product-view-img ml-3 cart-product-img">
                <p class="cart-product-name"><?php echo $product['productName'];?> </p> 
                <b class="d-inline mt-4 mr-5 float-right">Rs. <?php echo $product['price'];?> </b>
            </div>
            </a>
        <?php
        }
    ?>

    
</section>


<?php
    require 'footer.php';

?>