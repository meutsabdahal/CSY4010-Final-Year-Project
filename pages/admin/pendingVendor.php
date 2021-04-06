<?php
    if (isset($_POST['submit'])) {
        unset($_POST['submit']);
        $vendors = $vendor->updateStatus('status', 'vendorId', $_POST['vendorId']);
    }

    $vendors = $vendor->find('status', 0);

    $title = "MeKart";

    $content = loadTemplate("templates/adminPendingVendor.php", ['vendors' => $vendors]);

?>