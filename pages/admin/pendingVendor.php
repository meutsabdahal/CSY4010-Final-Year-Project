<?php
    if (isset($_POST['submit'])) {
        unset($_POST['submit']);
        $vendors = $vendor->updateStatus('status', 'vendorId', $_POST['vendorId']);

        // available from:
        // https://www.youtube.com/watch?v=3kzBJSUVsa4
        $to = $_POST['email'];
        $subject = 'Vendorship Approved';
        $message = ' Hello, Your request for vendorship has been approved. You can now sell your products on MeKart';
        mail($to, $subject, $message);
    }

    $vendors = $vendor->find('status', 0);

    $title = "MeKart";

    $content = loadTemplate("templates/adminPendingVendor.php", ['vendors' => $vendors]);

?>