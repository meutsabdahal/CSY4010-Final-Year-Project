<?php
    require 'header.php';

?>

<section>
    <h1 class="text-center mt-3 font-italic">Register for Vendorship</h1>
    <center>
    <!-- creating a vendor regsiter form in box container -->
    <div class="login-container shadow bg-white mt-1">
        <form action="" method="post" enctype="multipart/form-data" class="mt-3">
            <input type="hidden" name="vendorId">
            
            <label class="font-italic mt-4 login-register-label">Company Name</label><br>
            <input type="text" name="vendorName"  class="input-type"><br>

            <label class="font-italic mt-4 login-register-label">Company's Email Address</label><br>
            <input type="email" name="email"  class="input-type"><br>

            <label class="font-italic mt-4 login-register-label">Password</label><br>
            <input type="password" name="password"  class="input-type"><br>

            <label class="font-italic mt-4 login-register-label">Company's Phone Number</label><br>
            <input type="number" name="phoneNumber"  class="input-type"><br>
                
            <label class="font-italic mt-4 login-register-label">About Company</label><br>
            <textarea name="aboutCompany" id="" cols="30" rows="10"></textarea><br>

            <label class="font-italic mt-4 login-register-label">Province</label><br>
            <select name="province" class="input-type">
                <option value="province1">Province 1</option>
                <option value="province2">Province 2</option>
                <option value="bagmatiProvince">Bagmati Province</option>
                <option value="gandakiProvince">Gandaki Province</option>
                <option value="lumbiniProvince">Lumbini Province</option>
                <option value="karnaliProvince">Karnali Province</option>
                <option value="sudurpaschimProvince">Sudurpaschim Province</option>
            </select><br>

            <label class="font-italic mt-4 login-register-label">City</label><br>
            <input type="text" name="city"  class="input-type"><br>

            <label class="font-italic mt-4 login-register-label">Street</label><br>
            <input type="text" name="street"  class="input-type"><br>

            <label class="font-italic mt-4 login-register-label">Proposal</label><br>
            <input type="file" name="proposal"><br>
            
            
            <input type="submit" name="submit" value="Request" class="default-button mt-4">
        </form>
    </div>
    </center>
</section>


<?php
    require 'footer.php';

?>