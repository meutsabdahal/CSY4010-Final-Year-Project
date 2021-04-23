<?php
    session_start();
    $categories = $category->findAll();

    $vendors = $vendor->find('vendorId', $_GET['vId']);
    $vendors = $vendors->fetch();
    $title = "MeKart";

    $content = loadTemplate("templates/vendorTemplate.php", ['categories' => $categories, 'vendors' => $vendors]);

?>