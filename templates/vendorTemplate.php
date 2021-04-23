<?php
    require 'header.php';

?>

<section>
  
    <div class="ml-5 mt-3 w-50  product-description">
        <h4 class="font-italic"><?php echo $vendors['vendorName']; ?></h4>
        <br>
        <?php echo $vendors['aboutCompany']; ?>
            
    </div>
    
    <h3 class="ml-5 mt-4 font-italic">Reviews of Vendor Name's Products</h3>
    <div class="review-container shadow bg-white mt-3">
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
    </div>
</section>

<?php
    require 'footer.php';

?>