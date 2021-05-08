<?php
    // starting session and checking admin's login
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        // calling function to extarct all the data from customer table
        $customers = $customer->findAll();

        // giving title to the page
        $title = "MeKart";

        // calling function for displaying contents on the page
        $content = loadTemplate("templates/adminCustomer.php", ['customers' => $customers]);
    }
    // when admin is not loggedin displing admin's login page
    else
        include 'adminLogIn.php';

?>