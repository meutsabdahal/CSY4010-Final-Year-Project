<?php
    if (isset($_SESSION['sessCustomerId'])) {
        include 'loggedInHeader.php';
    }
    else
        include 'header.php';
?>
<section>
    <center>
    <h1 class="mt-5 font-italic">Your Order has been confirmed</h1>
    <h2 class="mt-5 font-italic">A Confirmation Email is sent to your Email Address</h2>
    <a href="home"><button class="default-button mt-5">OK</button></a>
    </center>
</section><br><br><br><br>


<?php
    require 'footer.php';

?>