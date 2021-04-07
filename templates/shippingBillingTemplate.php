<?php
    require 'header.php';

?>

<section>
    <div class="cart-listing mt-2 ml-5">
        <img src="img/shoe.jpg" class="product-view-img ml-3 cart-product-img">
        <p class="cart-product-name ml-4">Adidas White Sneakers for Men/Women Adidas White Sneakers for Men/Women </p> 
        <p class="mt-4 mr-5 float-right">Rs. 150 </p>
    </div>    
    <h3 class="text-center mt-4 font-italic">Shipping and Billing</h3>

    <center>
    <div class="login-container shadow bg-white mt-1">
        <label class="font-italic login-register-label">First Name</label>
        <input type="text" name="firstName"  class="input-type ml-5"><br>

        <label class="font-italic mt-4 login-register-label">Last Name</label>
        <input type="text" name="lastName"  class="input-type ml-5"><br>

        <label class="font-italic mt-4 login-register-label">Email Address</label>
        <input type="email" name="email"  class="input-type ml-5"><br>

        <label class="font-italic mt-4 login-register-label">Phone Number</label>
        <input type="number" name="phoneNumber"  class="input-type ml-5"><br>

        <label class="font-italic mt-4 login-register-label">Province</label>
        <select name="province" class="input-type ml-5">
            <option value="province1">Province 1</option>
            <option value="province2">Province 2</option>
            <option value="bagmatiProvince">Bagmati Province</option>
            <option value="gandakiProvince">Gandaki Province</option>
            <option value="lumbiniProvince">Lumbini Province</option>
            <option value="karnaliProvince">Karnali Province</option>
            <option value="sudurpaschimProvince">Sudurpaschim Province</option>
        </select><br>

        <label class="font-italic mt-4 login-register-label">City</label>
        <input type="text" name="lastName"  class="input-type ml-5"><br>

        <label class="font-italic mt-4 login-register-label">Street</label>
        <input type="text" name="lastName"  class="input-type ml-5"><br>

        <label class="font-italic mt-4 login-register-label">Payment Type</label>
        <select name="province" class="input-type ml-5">
            <option value="">-- Choose Payment Option --</option>
            <option value="">Cash on Delivery</option>
        </select><br>

        <h4 class="font-italic mt-3">Summary</h4>
        <p class="">SubTotal: <b>Rs.200 </b></p>
        <label class="font-italic login-register-label">Enter Voucher Code</label><br>
        <input type="text" name="voucherCode" class="input-type">
        <button class="default-button">Apply</button><br>
        <p class="">Total: <b>Rs.200 </b></p>
        <a href="paymentOption"><button class="default-button mt-4">Confirm</button></a>


    </div>

    </center>
</section>

<?php
    require 'footer.php';

?>