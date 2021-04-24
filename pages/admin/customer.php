<?php
    session_start();
    if (isset($_SESSION['sessAdminId'])) {

        $customers = $customer->findAll();

        $title = "MeKart";

        $content = loadTemplate("templates/adminCustomer.php", ['customers' => $customers]);
    }
    else
        include 'adminLogIn.php';

?>