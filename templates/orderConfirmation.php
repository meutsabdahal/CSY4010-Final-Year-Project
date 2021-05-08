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
    <!-- displaying confirmation messages -->
    <center>
    <h1 class="mt-5 font-italic">Your Order has been confirmed</h1>
    <h2 class="mt-5 font-italic">A Confirmation Email is sent to your Email Address</h2>
    <a href="home"><button class="default-button mt-5">OK</button></a>
    </center>
</section><br><br><br><br>


<?php
    require 'footer.php';

?>