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
            <br>
            <?php
                $status;
                foreach ($allProducts as $allProduct) {
                    if ($allProduct['keyword'] == $product['keyword']) {
                        if ($product['price'] > $allProduct['price']) {
                            $status = true;
                        }
                        else{
                            $status = false;
                        }
                    }
                }
                if($status == true){
                    echo "Available ";
                }
                else
                    echo "Not Available ";
                
            ?>
            <a href="shippingBilling?pId=<?php echo $product['productId']; ?>"></a>
            <button onclick="recommendation()" type="button" class="product-button" id="myBtn">Buy</button>

            <!-- Available from: -->
            <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal -->
            
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <!-- <span class="close">&times;</span> -->
                    <p>Some text in the Modal..</p>
                    <span><button type="button" class="no" data-dismiss="modal">Close</button></span>
                </div>

            </div>


            <form action="" method="post">
            <input type="hidden" name="cartId">
            <input type="hidden" name="productId" value="<?php echo $product['productId']; ?>">
            <?php
            if (isset($_SESSION['sessCustomerId'])) {
                ?>
                <input type="hidden" name="customerId" value="<?php echo $_SESSION['sessCustomerId']?>">
                <?php
            }
            ?>
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
            <?php
                if (isset($_SESSION['sessCustomerId'])) {
                    ?>
                    <input type="hidden" name="customerId" value="<?php echo $_SESSION['sessCustomerId']?>">
                    <?php
                }
                ?>
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



    <script>
        // Available From:
        // https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal

        function recommendation(){
            <?php
                $status;
                foreach ($allProducts as $allProduct) {
                    if ($allProduct['keyword'] == $product['keyword']) {
                        if ($product['price'] > $allProduct['price']) {
                            $status = true;
                        }
                        else{
                            $status = false;
                        }
                        
                    }
                }  
                if($status == true){
                    ?>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("no")[0];

                    // When the user clicks the button, open the modal 
                    btn.onclick = function() {
                    modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                    modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                    }
                    <?php
                }
                                
                else{
                    ?>
                    location.href = 'shippingBilling?pId=<?php echo $product['productId']; ?>'
                    <?php
                }
                              
            ?>

        }
    </script>
</section>


<?php
    require 'footer.php';

?>
