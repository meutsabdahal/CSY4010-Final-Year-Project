<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        // calling function to update data of specific vendorId
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $vendors = $vendor->updateStatus('status', 'vendorId', $_POST['vendorId']);

            // sending email to vendor of specific vendorId
            // available from:
            // https://www.youtube.com/watch?v=3kzBJSUVsa4
            $to = $_POST['email'];
            $subject = 'Vendorship Approved';
            $message = ' Hello, Your request for vendorship has been approved. You can now sell your products on MeKart';
            mail($to, $subject, $message);
        }

        // calling function to extarct data from vendor table with 0 status
        $vendors = $vendor->find('status', 0);

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminPendingVendor.php", ['vendors' => $vendors]);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';

?>