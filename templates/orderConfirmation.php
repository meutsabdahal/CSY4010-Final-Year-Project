<?php
    if (isset($_SESSION['sessCustomerId'])) {
        include 'loggedInHeader.php';
    }
    else
        include 'header.php';
?>
<section>
    <center>
    <h3 class="mt-5 font-italic">Your Order has been confirmed</h3>
    <button class="default-button">OK</button>
    </center>
</section>


<?php
    require 'footer.php';

?>