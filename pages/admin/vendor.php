<?php

    if(isset($_GET['vId'])){
        $vendors = $vendor->delete('vendorId',$_GET['aId']);	
    }

    $vendors = $vendor->findAll();

    $title = "MeKart";

    $content = loadTemplate("templates/adminVendor.php", ['vendors' => $vendors]);

?>