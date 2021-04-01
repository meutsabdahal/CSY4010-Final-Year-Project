<?php



    $vendors = $vendor->findAll();

    $title = "MeKart";

    $content = loadTemplate("templates/adminPendingVendor.php", ['vendors' => $vendors]);

?>