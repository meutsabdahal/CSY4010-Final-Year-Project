<?php
    require 'header.php';

?>

<section>

    <div class="product-details">
        <div class="ml-5 mt-4 w-50 text-center float-left product-description">
            <h4 class="font-italic">Product Name</h4>

            <!-- social media share link -->
            <div class="mt-2">
                <img src="svg/facebook.svg" class="ml-4">
                <img src="svg/email.svg" class="ml-2">
                <img src="svg/instagram.svg" class="ml-2">
            </div>
            <br>
            <?php
                foreach ($products as $product) {
                ?>
       
            <p>Sold by: <b>Seller Name</b><br>
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
            <a href=<?php echo $link; ?>><button type="button" class="product-button">Buy</button></a>
            <a href="cart"><button type="button" class="product-button">Add to Cart</button></a>
        </div>

        <div class=" mt-4 ml-5">
            <img src="img/shoe.jpg" class="ml-5 mt-4" >
        </div>
        <?php
                }
            ?>
    </div>


    <div>
        <h3 class="ml-5 mt-4 font-italic">Ratings and Reviews</h3>
        <img src="svg/rating.svg" class="ml-5">
        <img src="svg/rating.svg" class="ml-2">
        <img src="svg/rating.svg" class="ml-2">
        <img src="svg/rating.svg" class="ml-2">
        <img src="svg/rating.svg" class="ml-2">
        <h3 class="ml-5 mt-4 font-italic">Reviews</h3>
    </div>

    <div class="review-container shadow bg-white mt-3">
        <img src="svg/rating.svg">
        <img src="svg/rating.svg">
        <img src="svg/rating.svg">
        <img src="svg/rating.svg">
        <img src="svg/rating.svg">
        Customer Name
        <div class="review-box mt-2">
            <center> Review of the Product</center>
        </div>
    </div>

        
    <div class="review-container shadow bg-white mt-3">
        <img src="svg/rating.svg">
        <img src="svg/rating.svg">
        <img src="svg/rating.svg">
        <img src="svg/rating.svg">
        <img src="svg/rating.svg">
        Customer Name
        <div class="review-box mt-2">
            <center> Review of the Product</center>
        </div>
    </div>
</section>


<?php
    require 'footer.php';

?>
