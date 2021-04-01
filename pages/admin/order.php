<?php

    $orders = $order->findAll();

    $title = "MeKart";

    $content = loadTemplate("templates/adminOrder.php", ['orders' => $orders]);

?>