<?php

    $customers = $customer->findAll();

    $title = "MeKart";

    $content = loadTemplate("templates/adminCustomer.php", ['customers' => $customers]);

?>