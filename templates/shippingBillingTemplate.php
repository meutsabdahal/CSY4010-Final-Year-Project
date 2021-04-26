<?php
    if (isset($_SESSION['sessCustomerId'])) {
        include 'loggedInHeader.php';
    }
    else
        include 'header.php';
?>

<section>
    <div class="cart-listing mt-2 ml-5">

        <img src="productImages/<?php echo $products['thumnailImage'];?>" class="product-view-img ml-3 cart-product-img">
        <p class="cart-product-name ml-4"><?php echo $products['productName'];?> </p> 
        <p class="mt-4 mr-5 float-right">Rs. <?php echo $products['price'];?></p>
    </div>    
    <h3 class="text-center mt-4 font-italic">Shipping and Billing</h3>

    <center>
    <div class="login-container shadow bg-white mt-1">
        <form action="" method="post">
            <input type="hidden" name="orderId">
            <input type="hidden" name ="productId" value="<?php echo $products['productId']; ?>">
            <input type="hidden" name ="vendorId" value="<?php echo $products['vendorId']; ?>">
            <input type="hidden" name="customerId" value="<?php echo $_SESSION['sessCustomerId']; ?>">

            <label class="font-italic login-register-label">First Name</label>
            <input type="text" name="firstName"  class="input-type ml-5" required><br>

            <label class="font-italic mt-4 login-register-label">Last Name</label>
            <input type="text" name="lastName"  class="input-type ml-5" required><br>

            <label class="font-italic mt-4 login-register-label">Email Address</label>
            <input type="email" name="email"  class="input-type ml-5" required><br>

            <label class="font-italic mt-4 login-register-label">Phone Number</label>
            <input type="number" name="phoneNumber"  class="input-type ml-5" required><br>

            <label class="font-italic mt-4 login-register-label">Province</label>
            <select name="province" class="input-type ml-5" required>
                <option value="province1">Province 1</option>
                <option value="province2">Province 2</option>
                <option value="bagmatiProvince">Bagmati Province</option>
                <option value="gandakiProvince">Gandaki Province</option>
                <option value="lumbiniProvince">Lumbini Province</option>
                <option value="karnaliProvince">Karnali Province</option>
                <option value="sudurpaschimProvince">Sudurpaschim Province</option>
            </select><br>

            <label class="font-italic mt-4 login-register-label">City</label>
            <input type="text" name="city" class="input-type ml-5" required><br>

            <label class="font-italic mt-4 login-register-label">Street</label>
            <input type="text" name="street" class="input-type ml-5" required><br>

            <label class="font-italic mt-4 login-register-label">Payment Type</label>
            <select name="paymentType" class="input-type ml-5" required>
                <option value="">-- Choose Payment Option --</option>
                <option value="cashOnDelivery">Cash on Delivery</option>
            </select><br>
            <input type="hidden" name="orderStatus">


            <input type="submit" name="submit" value="Confirm" class="default-button mt-4">
        
        </form>


    </div>

    </center>
</section>

<?php
    require 'footer.php';

?>