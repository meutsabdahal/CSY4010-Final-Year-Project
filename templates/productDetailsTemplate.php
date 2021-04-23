<?php
    if (isset($_SESSION['sessCustomerId'])) {
        include 'loggedInHeader.php';
    }
    else
        include 'header.php';
?>

<section>

    <div class="product-details">
        <div class="ml-5 mt-4 w-50 text-center float-left product-description">
        <?php
            foreach ($products as $product) {
                ?>
            <h4 class="font-italic"><?php echo $product['productName'];?></h4>

            <!-- social media share link -->
            <div class="mt-2">
                <img src="svg/facebook.svg" class="ml-4">
                <img src="svg/email.svg" class="ml-2">
                <img src="svg/instagram.svg" class="ml-2">
            </div>
            <br>

            <p>Sold by: <b><a href="vendor?vId=<?php echo $product['vendorId']; ?>">hello</a></b><br>
            <?php echo $product['description'];?>
            </p>

            <p><b class="mr-5">Rs. <?php echo $product['price'];?></b>
            Quantity<input type="number" name="quantity" value="1"  min="1" class="ml-3 quantity-input">
            </p>
            <?php
                foreach ($allProducts as $allProduct) {
                    if ($allProduct['keyword'] == $product['keyword']) {
                        if ($product['price'] > $allProduct['price']) {
                            $link="hey";
                        }
                        else
                            $link="shippingBilling";
                    }
                }                
            ?>
            <br>
            <?php echo $product['keyword'];?>
            <a href="shippingBilling?pId=<?php echo $product['productId']; ?>"><button type="button" class="product-button">Buy</button></a>
            <form action="" method="post">
            <input type="text" name="cartId">
            <input type="text" name="productId" value="<?php echo $product['productId'] ?>">
            <input type="text" name="customerId" value=<?php echo $_SESSION['sessCustomerId']?>>
            <a href="cart"><button type="submit" name="cart" class="product-button">Add to Cart</button></a>
            </form>
        </div>

        <div class=" mt-4 ml-5">
            <img src="img/shoe.jpg" class="ml-5 mt-4" >
        </div>
        <?php
                }
            ?>
    </div>
    
    
    <div>
        <h3 class="ml-5 mt-4 font-italic">Reviews</h3>
        <form action="" method="post" class="mt-5">
                <input type="hidden" name="reviewId">
                <input type="text" name="review" class="ml-5">
                <input type="hidden" name="productId" value="<?php echo $product['productId']; ?>">
                <input type="hidden" name="customerId" value="<?php echo $_SESSION['sessCustomerId']; ?>">
                <input type="submit" name="submit" value="Add" class="default-button">

        </form>
    </div>

    <?php
        foreach ($reviews as $review) {
        ?>
            <div class="review-container shadow bg-white mt-3"> 
                <?php echo $review['firstName'].' '.$review['lastName'];?>
                <div class="review-box mt-2">
                    <center><?php echo $review['review'];?></center>
                </div>
             </div> 

        <?php
        }
    ?>

    <!-- <div class="review-container shadow bg-white mt-3">
        Customer Name
        <div class="review-box mt-2">
            <center> Review of the Product</center>
        </div>
    </div>

        
    <div class="review-container shadow bg-white mt-3"> 
        Customer Name
        <div class="review-box mt-2">
            <center> Review of the Product</center>
        </div>
    </div> -->
</section>


<?php
    require 'footer.php';

?>
