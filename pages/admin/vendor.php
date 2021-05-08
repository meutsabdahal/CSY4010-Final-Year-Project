<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        // getting id from vendor table and deleting that id by calling the function
        if(isset($_GET['vId'])){
            $vendors = $vendor->delete('vendorId',$_GET['vId']);	
        }

        // calling function to extarct all the data from vendor table whose status are 1
        $vendors = $vendor->find('status', 1);

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminVendor.php", ['vendors' => $vendors]);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';

?>