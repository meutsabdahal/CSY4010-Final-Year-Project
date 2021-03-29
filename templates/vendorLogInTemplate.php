<?php
    require 'header.php';

?>

<section>
    <h1 class="text-center mt-4 font-italic">Log In To Your Account</h1>
    <center>

    <!-- creating a vendor login form in box container -->
    <div class="login-container shadow bg-white mt-1">
        <label class="font-italic login-register-label">Email Address</label><br>
        <input type="text" name="email"  class="input-type"><br>

        <label class="font-italic mt-4 login-register-label">Password</label><br>
        <input type="password" name="password"  class="input-type"><br>
        
        <a href=""><p class="bg-white float-right mt-2 text-dark">Forgot Password?</p></a>
        <a href="login"><button type="button" class="float-right default-button mt-4">Log In</button></a>
    </div>

    <!-- creating a horizontal line with text in-between -->
    <!-- available from: https://stackoverflow.com/questions/5214127/css-technique-for-a-horizontal-line-with-words-in-the-middle -->
    <p class="horizontal-line mt-5"><span>Want to Sell Here?<br></span></p>
    <a href="vendorRegistration"><button type="button" class="default-button mt-4">Request for VendorShip</button></a>
    </center>
</section>


<?php
    require 'footer.php';

?>