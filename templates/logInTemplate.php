<?php
    require 'header.php';

?>

<section>
    <h1 class="text-center mt-4 font-italic">Welcome to MeKart</h1>
    <center>

    <!-- creating a customer login form in box container -->
    <div class="login-container shadow bg-white mt-1">
        <form action="" method="post">
            <label class="font-italic login-register-label">Email Address</label><br>
            <input type="text" name="email"  class="input-type"><br>

            <label class="font-italic mt-4 login-register-label">Password</label><br>
            <input type="password" name="password"  class="input-type"><br>
            
            <input type="submit" name="submit" value="Log In" class=" default-button mt-4">
        </form>
    </div>

    <!-- creating a horizontal line with text in-between -->
    <!-- available from: https://stackoverflow.com/questions/5214127/css-technique-for-a-horizontal-line-with-words-in-the-middle -->
    <!-- <p class="horizontal-line mt-5"><span>Sign In Using<br></span></p> -->
    <p class="horizontal-line mt-5"><span>New Here?<br></span></p>
    <a href="register"><button type="button" class="default-button mt-4">Register</button></a>
    </center>

</section>


<?php
    require 'footer.php';

?>