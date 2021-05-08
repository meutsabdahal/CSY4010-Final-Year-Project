<?php
    // displaying loggedin header when customer is loggedin
    if (isset($_SESSION['sessCustomerId'])) {
        include 'loggedInHeader.php';
    }
    // displaying header when customer is not logged in
    else
        include 'header.php';
?>

<section>
    <!-- displaying details of customer -->
    <div class="ml-5 mt-3 w-50  product-description">
        <h4 class="font-italic"><?php echo $vendors['vendorName']; ?></h4>
        <br>
        <?php echo $vendors['aboutCompany']; ?>
            
    </div>
    <!-- displaying reviews of the vendor's product -->
    <h3 class="ml-5 mt-4 font-italic">Reviews of Vendor Name's Products</h3>
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

</section>

<?php
    require 'footer.php';

?>