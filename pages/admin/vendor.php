<?php
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        if(isset($_GET['vId'])){
            $vendors = $vendor->delete('vendorId',$_GET['vId']);	
        }

        $vendors = $vendor->find('status', 1);

        $title = "MeKart";

        $content = loadTemplate("templates/adminVendor.php", ['vendors' => $vendors]);
    }

    else
        include 'adminLogIn.php';

?>