<?php

    $vendors = $vendor->find('status', 0);

    $title = "MeKart";

    $content = loadTemplate("templates/adminPendingVendor.php", ['vendors' => $vendors]);

?>