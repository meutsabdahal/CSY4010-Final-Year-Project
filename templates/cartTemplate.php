<?php
    if (isset($_SESSION['sessCustomerId'])) {
        include 'loggedInHeader.php';
    }
    else
        include 'header.php';
?>

<section>

    <div class="cart-listing mt-2 ml-5">
        <?php
            foreach ($carts as $cart) {
                ?>
            <div class="">
            <img src="img/shoe.jpg" class="product-view-img ml-3 cart-product-img">
            <p class="cart-product-name"><?php echo $cart['productName']; ?></p> 
            <p class="d-inline ml-5">Rs. <?php echo $cart['price'];?> </p>
            <img src="svg/delete.svg" class="mt-4 mr-5 float-right">
        </div>    
                <?php
            }
        ?>
    </div>

    <center>
        <div class="order-summary text-center mt-4">
            <h4 class="font-italic">Summary</h4>
            <p class="">Total: <b>Rs.200 </b></p>
            <a href="paymentOption"><button class="default-button mt-4">Proceed to Checkout</button></a>

        </div>
    </center>

</section>

<?php
    require 'footer.php';

?>